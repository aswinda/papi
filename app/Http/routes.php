<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Http\Controllers\admin\AdminController as AdminController;

Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('register', 'UsersController@register');
Route::post('post-register', 'UsersController@postRegister');
Route::get('login', 'UsersController@index');
Route::post('post-login', 'UsersController@postLogin');
Route::get('logout', 'UsersController@logout');

//ADMIN
Route::get('admin', 'Admin\AdminController@index');

Route::get('admin/user', 'Admin\AdminUserController@index');
Route::get('admin/user/create', 'Admin\AdminUserController@create');
Route::post('admin/user/store', 'Admin\AdminUserController@store');
Route::get('admin/user/show/{id}', 'Admin\AdminUserController@show');
Route::get('admin/user/edit/{id}', 'Admin\AdminUserController@edit');
Route::post('admin/user/update/{id}', 'Admin\AdminUserController@update');
Route::post('admin/user/delete/{id}', 'Admin\AdminUserController@delete');

Route::get('admin/seed', 'Admin\AdminSeedController@index');
Route::get('admin/seed/create', 'Admin\AdminSeedController@create');
Route::post('admin/seed/store', 'Admin\AdminSeedController@store');
Route::get('admin/seed/show/{id}', 'Admin\AdminSeedController@show');
Route::get('admin/seed/edit/{id}', 'Admin\AdminSeedController@edit');
Route::post('admin/seed/update/{id}', 'Admin\AdminSeedController@update');
Route::post('admin/seed/delete/{id}', 'Admin\AdminSeedController@delete');

Route::get('admin/land', 'Admin\AdminLandController@index');
Route::get('admin/land/create', 'Admin\AdminLandController@create');
Route::post('admin/land/store', 'Admin\AdminLandController@store');
Route::get('admin/land/show/{id}', 'Admin\AdminLandController@show');
Route::get('admin/land/edit/{id}', 'Admin\AdminLandController@edit');
Route::post('admin/land/update/{id}', 'Admin\AdminLandController@update');
Route::post('admin/land/delete/{id}', 'Admin\AdminLandController@delete');

Route::get('admin/plant', 'Admin\AdminPlantController@index');
Route::get('admin/plant/create', 'Admin\AdminPlantController@create');
Route::post('admin/plant/store', 'Admin\AdminPlantController@store');
Route::get('admin/plant/show/{id}', 'Admin\AdminPlantController@show');
Route::get('admin/plant/edit/{id}', 'Admin\AdminPlantController@edit');
Route::post('admin/plant/update/{id}', 'Admin\AdminPlantController@update');
Route::post('admin/plant/delete/{id}', 'Admin\AdminPlantController@delete');

Route::get('admin/transaction/land', 'Admin\AdminLandTransactionController@index');
Route::get('admin/transaction/land/edit/{id}', 'Admin\AdminLandTransactionController@edit');
Route::post('admin/transaction/land/update/{id}', 'Admin\AdminLandTransactionController@update');
Route::post('admin/transaction/land/delete/{id}', 'Admin\AdminLandTransactionController@delete');

Route::get('admin/transaction/seed', 'Admin\AdminSeedTransactionController@index');
Route::get('admin/transaction/seed/edit/{id}', 'Admin\AdminSeedTransactionController@edit');
Route::post('admin/transaction/seed/update/{id}', 'Admin\AdminSeedTransactionController@update');
Route::post('admin/transaction/seed/delete/{id}', 'Admin\AdminSeedTransactionController@delete');

// INVESTOR
Route::get('investor', 'Investor\InvestorController@index');

Route::get('investor/seed', 'Investor\InvestorSeedController@index');
Route::get('investor/seed/{id}', 'Investor\InvestorSeedController@index');
Route::get('investor/seed/detail/{id}', 'Investor\InvestorSeedController@detail');
Route::post('investor/seed/payment/{id}', 'Investor\InvestorSeedController@payment');
Route::post('investor/seed/post-payment', 'Investor\InvestorSeedController@postPayment');

Route::get('investor/land', 'Investor\InvestorLandController@index');
Route::get('investor/land/{id}', 'Investor\InvestorLandController@index');
Route::get('investor/land/detail/{id}', 'Investor\InvestorLandController@detail');
Route::post('investor/land/payment/{id}', 'Investor\InvestorLandController@payment');
Route::post('investor/land/post-payment', 'Investor\InvestorLandController@postPayment');

Route::get('investor/landowned', 'Investor\InvestorLandOwnedController@listLandOwned');
Route::get('investor/landowned/{id}', 'Investor\InvestorLandOwnedController@listLandOwned');
Route::get('investor/landowned/detail/{id}', 'Investor\InvestorLandOwnedController@detail');

Route::get('investor/seedowned', 'Investor\InvestorSeedOwnedController@listSeedOwned');
Route::get('investor/seedowned/{id}', 'Investor\InvestorSeedOwnedController@listSeedOwned');
Route::get('investor/seedowned/detail/{id}', 'Investor\InvestorSeedOwnedController@detail');

Route::get('investor/plant', 'Investor\InvestorPlantController@index');
Route::get('investor/plant/{id}', 'Investor\InvestorPlantController@index');
Route::get('investor/plant/chooseland', 'Investor\InvestorPlantController@chooseLand');
Route::get('investor/plant/chooseland/{id}', 'Investor\InvestorPlantController@chooseLand');
Route::post('investor/plant/chooseseed/{id}', 'Investor\InvestorPlantController@chooseSeed');
Route::post('investor/planting', 'Investor\InvestorPlantController@planting');
Route::post('investor/plantingstore', 'Investor\InvestorPlantController@plantingStore');

// LAND OWNER
Route::get('landowner', 'LandOwner\LandOwnerController@index');
Route::get('landowner/postland', 'LandOwner\LandOwnerController@postland');
Route::post('landowner/land/store', 'LandOwner\LandOwnerController@store');
Route::get('landowner/land', 'LandOwner\LandOwnerController@land');
Route::get('landowner/detail/{id}', 'LandOwner\LandOwnerController@detail');

