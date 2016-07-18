<?php namespace App\Http\Controllers\Investor;
use App\Http\Controllers\Controller;
use App\Model\Plant as Plant;
use App\Model\LandTransaction as LandTransaction;
use App\Model\SeedTransaction as SeedTransaction;
use Input;
use Auth;
use Redirect;

class InvestorPlantController extends Controller {

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

	public function index($page = 1)
	{
		$user = Auth::user();

		$plants = Plant::listPlant($user->id, $page);
		$page_count = ceil(Plant::plantCount($user->id) / 4.0);

		return view('investor.plant.index')
			->with('plants', $plants)
			->with('page', $page)
			->with('page_count', $page_count);
	}

	public function chooseLand($page = 1)
	{
		$user = Auth::user();

		$lands = LandTransaction::listLandsOwned($user->id, $page);
		$page_count = ceil(LandTransaction::landsOwnedCount($user->id) / 4.0);

		return view('investor.plant.chooseland')
			->with('lands', $lands)
			->with('page', $page)
			->with('page_count', $page_count);
	}

	public function chooseSeed($page = 1)
	{
		$land_id = Input::get('land_id');
		$user = Auth::user();

		$seeds = SeedTransaction::listSeedsOwned($user->id, $page);
		$page_count = ceil(SeedTransaction::SeedsOwnedCount($user->id) / 4.0);

		return view('investor.plant.chooseseed')
			->with('seeds', $seeds)
			->with('page', $page)
			->with('page_count', $page_count)
			->with('land_id', $land_id);
	}

	public function planting()
	{
		$land_id = Input::get('land_id');
		$seed_id = Input::get('seed_id');

		$land = LandTransaction::detailLandsOwnedWithImage($land_id);
		$seed = SeedTransaction::detailSeedsOwnedWithImage($seed_id);

		return view('investor.plant.plant')
			->with('seed', $seed)
			->with('land', $land);
	}

	public function plantingStore()
	{
		$user = Auth::user();

		$plant = new Plant;
		$plant->user_id = $user->id;
		$plant->land_transaction_id = Input::get('land_transaction_id');
		$plant->seed_transaction_id = Input::get('seed_transaction_id');
		$plant->save();

		return Redirect::to('investor/plant');
	}
	

}
