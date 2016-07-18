<?php namespace App\Http\Controllers\Investor;
use App\Http\Controllers\Controller;
use App\Model\Land as Land;
use App\Model\LandTransaction as LandTransaction;
use Input;
use Auth;

class InvestorLandController extends Controller {

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
	public function index($page = 1)
	{
		$lands = Land::listLandsWithImage($page);
		$page_count = ceil(Land::count() / 4.0);

		return view('investor.land.index')
			->with('lands', $lands)
			->with('page', $page)
			->with('page_count', $page_count);
	}

	public function detail($id)
	{
		$land = Land::detailLandsWithImage($id);

		return view('investor.land.detail')
			->with('land', $land);
	}

	public function payment($id)
	{
		$user = Auth::user();

		$land = Land::detailLandsWithImage($id);
		$jumlah = Input::get('jumlah');

		$transaction = new LandTransaction;
		$transaction->user_id = $user->id;
		$transaction->land_id = $id;
		$transaction->wide = $jumlah;
		$transaction->price = $land->price * $jumlah;
		$transaction->save();

		return view('investor.land.payment')
			->with('land', $land)
			->with('jumlah', $jumlah)
			->with('transaction_id', $transaction->id);
	}

}
