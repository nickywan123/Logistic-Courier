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

Auth::routes();

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


//Show order history
Route::get('dashboard/orders/history','Dashboard\OrderController@show')->name('order.show');


//Top Up Page
Route::get('dashboard/top-up','Dashboard\TopUpController@index')->name('topup.index');


//Toyyibpay request
Route::get('toyyibpay','ToyyibpayController@createBill')->name('toyyibpay-create');

Route::get('toyyibpay-status','ToyyibpayController@paymentStatus')->name('toyyibpay-status');

Route::post('toyyibpay-callback','ToyyibpayController@callback')->name('toyyibpay-callback');


/**
 * Easy Parcel
 */
Route::get('easyparcel-makingOrder','EasyParcelController@makingOrder')->name('easyparcel-makingOrder');

Route::get('easyparcel-rateChecking','EasyParcelController@rateChecking')->name('easyparcel-rateChecking');

/**
 * FINANCE REPORT
 */

 Route::get('/dashboard/finance-report','FinanceController@index')->name('finance.index');


 Route::get('checkview', function (){
     return view('payments.failed', [
         'errorMessage' => true
     ]);
 });
