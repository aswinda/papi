<?php namespace App\Http\Controllers\Investor;
use App\Http\Controllers\Controller;
use App\Model\Seed as Seed;
use App\Model\SeedTransaction as SeedTransaction;
use Input;
use Auth;

class InvestorSeedController extends Controller {

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
		$seeds = Seed::listSeedsWithImage($page);
		$page_count = ceil(Seed::count() / 4.0);

		return view('investor.seed.index')
			->with('seeds', $seeds)
			->with('page', $page)
			->with('page_count', $page_count);
	}

	public function detail($id)
	{
		$seed = Seed::detailSeedsWithImage($id);

		return view('investor.seed.detail')
			->with('seed', $seed);
	}

	public function payment($id)
	{
		$user = Auth::user();

		$seed = Seed::detailSeedsWithImage($id);
		$jumlah = Input::get('jumlah');

		$transaction = new SeedTransaction;
		$transaction->user_id = $user->id;
		$transaction->seed_id = $id;
		$transaction->amount = $jumlah;
		$transaction->price = $seed->price * $jumlah;
		$transaction->save();

		return view('investor.seed.payment')
			->with('seed', $seed)
			->with('jumlah', $jumlah)
			->with('transaction_id', $transaction->id);
	}

}
