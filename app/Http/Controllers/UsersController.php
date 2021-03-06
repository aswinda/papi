<?php 
namespace App\Http\Controllers;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use App\Model\Profile as Profile;
use App\Model\Group as Group;
use App\User as User;
use Illuminate\Support\Facades;
use Input;
use Hash;
use Auth;

class UsersController extends Controller {

	public function index()
	{
		return view('auth.login');
	}

	public function postLogin()
	{
		if(Auth::attempt(array(
			'email' 		=> Input::get('email'),
			'password' 		=> Input::get('password'),
			'id'			=> User::getId(Input::get('email')),
			'group_id'		=> User::getGroup(Input::get('email'))
			)))
		{
			$group_id = User::getGroup(Input::get('email'));

			switch($group_id)
			{
				case Group::ADMIN:
					// ke dashboard admin
					return Redirect::to('admin');
					break;
				case Group::INVESTOR:
					// ke sales admin
					return Redirect::to('investor');
					break;
				case Group::LAND_OWNER:
					return Redirect::to('landowner');
					break;
			}
		} 
		else 
		{
			return redirect::back()->with('errors', "Wrong Email/Password!");
		}

	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function register()
	{
		return view('frontend.user.register');
	}

	public function postRegister(Request $request)
	{
		//var_dump(Input::all());
		$rules = array(
			'email' => 'required|unique:users|email',
			'password' => 'required|confirmed',
			'password_confirmation' => '',
			'group' => 'required'
		);
		//return Hash::make(Input::get('password'));
		$validator = Validator::make($request->input(), $rules);

		if($validator->fails()){
			var_dump($validator->messages());
		}

		$profile = new Profile();
		$profile->email = $request->input('email');
		$profile->name = $request->input('name');
		$profile->save();

		$user = new User();
		$user->profile_id = $profile->id;
		$user->email = $request->input('email');
		$user->password = Hash::make($request->input('password'));
		$user->group_id = $request->input('group');
		$user->save();

		return Redirect::to('login')
			->with('message', 'User has been added');

	}

	public function listUser()
	{
		
	}

}
