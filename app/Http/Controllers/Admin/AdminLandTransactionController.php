<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Land as Land;
use App\Model\LandTransaction as LandTransaction;
use App\Model\Image as Image;
use App\Model\ImagePath as ImagePath;
use App\Model\District as District;
use App\Model\Province as Province;
use Input;
use Redirect;

class AdminLandTransactionController extends Controller {

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
		$lands = LandTransaction::listLandTransactions();

		return view('admin.transaction.landtransaction.index')
			->with('tab1', 'Land Transactions')
			->with('title', 'Land Transactions')
			->with('titleDescription', 'Manage')
			->with('lands', $lands);
	}

	public function edit($id)
	{
		$land = LandTransaction::detailLandsWithImage($id);

		return view('admin.transaction.landtransaction.edit')
			->with('tab1', 'lands')
			->with('title', 'lands')
			->with('titleDescription', 'Edit')
			->with('land', $land);
	}

	public function update($id)
	{
		$landTransaction = LandTransaction::find($id);

		$landTransaction->wide = Input::get('wide');
		$landTransaction->price = Input::get('price');
		$landTransaction->status = Input::get('status');
		$landTransaction->save();

		return Redirect::to('admin/transaction/land')
			->with('message', 'land has been updated!');
	}

	public function delete($id)
	{
		LandTransaction::destroy($id);
		return Redirect::to('admin/transaction/land')
			->with('message', 'land has been deleted!');
	}
}
