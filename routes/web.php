<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard home page
Route::get('/dashboard/home','Dashboard\HomeController@index')->name('dashboard.index');

//Create new order
Route::get('/dashboard/orders','Dashboard\OrderController@index')->name('order.index');

//Generate quotation
Route::post('/dashboard/orders/quotation','Dashboard\OrderController@quotation')->name('order.quotation');

//Quotation page
Route::get('/dashboard/orders/quotation','Dashboard\OrderController@showQuotation')->name('quotation.show');



//Booking order page
Route::post('/dashboard/orders/booking','Dashboard\OrderController@createOrder')->name('create.quotation');

//Show booking order page
Route::get('dashboard/orders/booking','Dashboard\OrderController@showBooking')->name('show.booking');

//Create new booking
Route::post('dashboard/orders','Dashboard\OrderController@store')->name('order.store');

//Error page creating order
Route::get('/dashboard/orders/order-failed','Dashboard\OrderController@createOrderStatus')->name('create.order.failed');


//Show order history
Route::get('dashboard/orders/history','Dashboard\OrderController@show')->name('order.show');


//Top Up Page
Route::get('dashboard/top-up','Dashboard\TopUpController@index')->name('topup.index');

//Top Up History
Route::get('dashboard/top-up/history','Dashboard\TopUpController@show')->name('topup.show');



//Toyyibpay request
Route::get('toyyibpay','ToyyibpayController@createBill')->name('toyyibpay-create');

Route::get('toyyibpay-status','ToyyibpayController@paymentStatus')->name('toyyibpay-status');

Route::post('toyyibpay-callback','ToyyibpayController@callback')->name('toyyibpay-callback');


/**
 * Easy Parcel(for testing)
 */
// Route::get('easyparcel-makingOrder','EasyParcelController@makingOrder')->name('easyparcel-makingOrder');

// Route::get('easyparcel-rateChecking','EasyParcelController@rateChecking')->name('easyparcel-rateChecking');

/**
 * FINANCE REPORT
 */
Route::get('/dashboard/finance-report','FinanceController@index')->name('finance.index');

/**
 * Administrator
 */
Route::get('/administrator','Administrator\AdministratorController@index')->name('admin.index');

Route::get('/administrator/rates','Administrator\AdministratorController@getRates')->name('admin.index.rates');


/**
 * Fuiyoh Hubs
 */
Route::get('/hub/home','Hub\HomeController@index')->name('hub.index');

Route::get('/hub/orders/index','Hub\OrderController@index')->name('hub.orders.index');



