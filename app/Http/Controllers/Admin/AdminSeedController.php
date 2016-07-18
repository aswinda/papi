<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Seed as Seed;
use App\Model\Image as Image;
use App\Model\ImagePath as ImagePath;
use Input;
use Redirect;

class AdminSeedController extends Controller {

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
		$seeds = Seed::listSeeds();

		return view('admin.seed.index')
			->with('tab1', 'Seeds')
			->with('title', 'Seeds')
			->with('titleDescription', 'Manage Seeds')
			->with('seeds', $seeds);
	}

	public function create()
	{

		return view('admin.seed.create')
			->with('tab1', 'Seeds')
			->with('tab2', 'Create')
			->with('title', 'Seeds')
			->with('titleDescription', 'Manage Seeds');
	}

	public function store()
	{
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
			Input::file('file')->move(public_path().'/images/seeds',$imagePath->path);

			$imagePath->save();

			$image->image_path_id = $imagePath->id;
			$image->save();
		}

		//Store Products
		$seed = new Seed;
		$seed->name = Input::get('name');
		$seed->stock = Input::get('stock');
		$seed->price = Input::get('price');
		$seed->description = Input::get('description');
		$seed->image_id = $image->id;
		$seed->save();

		return Redirect::to('admin/seed')
			->with('message', 'Seed has been added!');
	}

	public function edit($id)
	{
		$seed = Seed::detailSeedsWithImage($id);

		return view('admin.seed.edit')
			->with('tab1', 'Seeds')
			->with('title', 'Seeds')
			->with('titleDescription', 'Edit Seeds')
			->with('seed', $seed);
	}

	public function update($id)
	{
		$seed = Seed::find($id);
		$image = Image::find($seed->image_id);
		$imagePath = ImagePath::find($image->image_path_id);
		// Store Image
		if (Input::file('file') != NULL)
		{
			if($imagePath->id != 0)
				File::delete(public_path().'/images/seeds/'.$imagePath->path);

			if(Input::file('file')->getClientMimeType() != 'image/jpeg' &&
			Input::file('file')->getClientMimeType() != 'image/jpg' &&
			Input::file('file')->getClientMimeType() != 'image/png'  &&
			Input::file('file')->getClientMimeType() != 'image/bmp')
			{
				return Redirect::back()
					->with('errors', 'File Harus gambar dan bertipe jpeg, jpg, png');
			}

			
			$file = Input::file('file');
			$imagePath->name = strtotime("now");
			$extension = str_replace("image/", "", $file->getClientMimeType());
			$imagePath->path = $imagePath->name.'.'.$extension;
			Input::file('file')->move(public_path().'/images/seeds',$imagePath->path);

			$imagePath->save();

			$image->image_path_id = $imagePath->id;
			$image->save();
		}

		//Store Products
		$seed->name = Input::get('name');
		$seed->stock = Input::get('stock');
		$seed->price = Input::get('price');
		$seed->description = Input::get('description');
		$seed->image_id = $image->id;
		$seed->save();

		return Redirect::to('admin/seed')
			->with('message', 'Seed has been updated!');
	}

	public function delete($id)
	{
		Seed::destroy($id);
		return Redirect::to('admin/seed')
			->with('message', 'Seed has been deleted!');
	}

	public function show($id)
	{
		$seed = Seed::detailSeedsWithImage($id);

		return view('admin.seed.show')
			->with('tab1', 'Seeds')
			->with('title', 'Seeds')
			->with('titleDescription', 'show')
			->with('seed', $seed);
	}

}

