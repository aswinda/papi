<?php namespace App\Http\Controllers\Investor;
use App\Http\Controllers\Controller;
use App\Model\Plant as Plant;
use Auth;

class InvestorController extends Controller {

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
		$user = Auth::user();

		$seed = Plant::countSeed($user->id);
		$date_diff = Plant::getFirstDate();
		$co = $seed * $date_diff;
		$days = $date_diff;

		return view('investor.index')
			->with('seed', $seed)
			->with('co', $co)
			->with('days', $days);
	}

	public function seed()
	{
		return view('investor.seed.index');
	}

}
