<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User as User;
use App\Model\Profile as Profile;
use App\Model\Image as Image;
use App\Model\ImagePath as ImagePath;
use App\Model\Province as Province;
use App\Model\District as District;
use Input;
use Hash;
use Redirect;

class AdminUserController extends Controller {

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
		$users = User::listUser();

		return view('admin.user.index')
			->with('tab1', 'Users')
			->with('title', 'Users')
			->with('titleDescription', 'Manage Users')
			->with('users', $users);
	}

	public function create()
	{
		return view('admin.user.create')
			->with('tab1', 'Users')
			->with('tab2', 'Create')
			->with('title', 'Users')
			->with('titleDescription', 'Create');
	}

	public function store()
	{
		if(Input::get('password') != Input::get('password-confirmation'))
			return Redirect::back()
				->with('errors', 'Password tidak sama!');
		
		$imagePath = new ImagePath;
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

			
			$file = Input::file('file');
			$imagePath->name = strtotime("now");
			$extension = str_replace("image/", "", $file->getClientMimeType());
			$imagePath->path = $imagePath->name.'.'.$extension;
			Input::file('file')->move(public_path().'/images/profiles',$imagePath->path);

			$imagePath->save();
		}

		$profile = new Profile;
		$profile->email = Input::get('email');
		$profile->name = Input::get('name');
		$profile->address = Input::get('address');
		$profile->gender = Input::get('gender');
		$profile->image_path_id = $imagePath->id;
		$profile->save();

		//Store Products
		$user = new user;
		$user->email = Input::get('email');
		$user->profile_id = $profile->id;
		$user->password = Hash::make(Input::get('password'));
		$user->group_id = Input::get('group');
		$user->save();

		return Redirect::to('admin/user')
			->with('message', 'user has been added');
	}

	public function edit($id)
	{
		$user = user::detailUsersWithImage($id);
		$provinces = Province::all();
		$districts = District::all();

		return view('admin.user.edit')
			->with('tab1', 'users')
			->with('title', 'users')
			->with('titleDescription', 'Edit')
			->with('user', $user)
			->with('provinces', $provinces)
			->with('districts', $districts);
	}

	public function update($id)
	{
		$user = User::find($id);
		$profile = Profile::find($user->profile_id);
		$imagePath = ImagePath::find($profile->image_path_id);
		// Store Image
		if (Input::file('file') != NULL)
		{
			if($imagePath->id != 0)
				File::delete(public_path().'/images/users/'.$imagePath->path);

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
			Input::file('file')->move(public_path().'/images/profiles',$imagePath->path);

			$imagePath->save();
		}

		$user->email = Input::get('email');
		if(Input::get('password') != "" && Input::get('password') == Input::get('password-confirmation'))
			$user->password = Hash::make(Input::get('password'));
		$user->group_id = Input::get('group');
		$user->save();

		$profile->email = Input::get('email');
		$profile->name = Input::get('name');
		$profile->address = Input::get('address');
		$profile->gender = Input::get('gender');
		$profile->image_path_id = $imagePath->id;
		$profile->save();

		

		return Redirect::to('admin/user')
			->with('message', 'user has been updated!');
	}

	public function delete($id)
	{
		User::destroy($id);
		return Redirect::to('admin/user')
			->with('message', 'user has been deleted!');
	}

	public function show($id)
	{
		$user = User::detailUsersWithImage($id);

		return view('admin.user.show')
			->with('tab1', 'users')
			->with('title', 'users')
			->with('titleDescription', 'show')
			->with('user', $user);
	}

}
