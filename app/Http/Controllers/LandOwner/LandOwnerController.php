<?php namespace App\Http\Controllers\LandOwner;
use App\Http\Controllers\Controller;
use App\Model\Land as Land;
use App\Model\Image as Image;
use App\Model\ImagePath as ImagePath;
use App\Model\District as District;
use App\Model\Province as Province;
use Input;
use Redirect;
use Auth;


class LandOwnerController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('landowner.index');
	}

	public function postland()
	{
		$districts = District::all();
		$provinces = Province::all();

		return view('landowner.postland')
			->with('districts', $districts)
			->with('provinces', $provinces);
	}

	public function store()
	{
		$user = Auth::user();
		//var_dump(Input::all());
		$image = new Image;
		// Store Image
		if (Input::file('file') != NULL)
		{
			if(Input::file('file')->getClientMimeType() != 'image/jpeg' &&
			Input::file('file')->getClientMimeType() != 'image/jpg' &&
			Input::file('file')->getClientMimeType() != 'image/png'  &&
			Input::file('file')->getClientMimeType() != 'image/bmp')
			{
				return Redirect::back()
					->with('errors', 'File Harus gambar dan bertipe jpeg, jpg, png');
			}

			$imagePath = new ImagePath;
			$file = Input::file('file');
			$imagePath->name = strtotime("now");
			$extension = str_replace("image/", "", $file->getClientMimeType());
			$imagePath->path = $imagePath->name.'.'.$extension;
			Input::file('file')->move(public_path().'/images/lands',$imagePath->path);

			$imagePath->save();

			$image->image_path_id = $imagePath->id;
			$image->save();
		}

		//Store Products
		$land = new Land;
		$land->name = Input::get('name');
		$land->wide = Input::get('wide');
		$land->description = Input::get('description');
		$land->price = Input::get('price');
		$land->district_id = Input::get('district_id');
		$land->image_id = $image->id;
		$land->user_id = $user->id;
		$land->save();

		return Redirect::to('landowner')
			->with('message', 'Land has been added');
	}

	public function land($page = 1)
	{
		$user = Auth::user();

		$lands = Land::landOwnerListLandsWithImage($page, $user->id);
		$page_count = ceil(Land::listLandsWithId($user->id) / 4.0);

		return view('landowner.buyland')
			->with('lands', $lands)
			->with('page', $page)
			->with('page_count', $page_count);
	}

	public function detail($id)
	{
		$land = Land::landOwnerDetailLandsWithImage($id);
		$updates = Land::landUpdates($id);

		return view('landowner.detail')
			->with('land', $land)
			->with('updates', $updates);
	}
	


}
