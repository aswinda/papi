<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Seed as Seed;
use App\Model\SeedTransaction as SeedTransaction;
use Input;
use Redirect;

class AdminSeedTransactionController extends Controller {

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
		$seeds = SeedTransaction::listSeedTransactions();

		return view('admin.transaction.seedtransaction.index')
			->with('tab1', 'Seed Transactions')
			->with('title', 'Seed Transactions')
			->with('titleDescription', 'Manage')
			->with('seeds', $seeds);
	}

	public function edit($id)
	{
		$seed = SeedTransaction::detailSeedsWithImage($id);

		return view('admin.transaction.seedtransaction.edit')
			->with('tab1', 'Seeds')
			->with('title', 'Seeds')
			->with('titleDescription', 'Edit')
			->with('seed', $seed);
	}

	public function update($id)
	{
		$seedTransaction = SeedTransaction::find($id);

		$seedTransaction->amount = Input::get('amount');
		$seedTransaction->price = Input::get('price');
		$seedTransaction->status = Input::get('status');
		$seedTransaction->save();

		return Redirect::to('admin/transaction/seed')
			->with('message', 'Seed has been updated!');
	}

	public function delete($id)
	{
		SeedTransaction::destroy($id);
		return Redirect::to('admin/transaction/seed')
			->with('message', 'Seed has been deleted!');
	}
}
