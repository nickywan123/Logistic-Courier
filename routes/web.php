<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Web\WelcomeController@welcome')->name('landing.page');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Guest Quotation
 */

//Generate quotation for guest
Route::post('/guest/quotation','Guest\OrderController@quotation')->name('guest.order.quotation');

//Show quotation for guest
Route::get('/guest/quotation','Guest\OrderController@showQuotation')->name('guest.quotation.show');


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
Route::get('/administrator/users','Administrator\UserController@index')->name('admin.users.index');

Route::get('/administrator/users/{user}/edit','Administrator\UserController@edit')->name('admin.users.edit');

Route::put('/administrator/users/{user}','Administrator\UserController@update')->name('admin.users.update');

Route::get('administrator/users/create','Administrator\UserController@create')->name('admin.users.create');

Route::post('administrator/users','Administrator\UserController@store')->name('admin.users.store');

Route::get('/administrator/rates/create','Administrator\RateController@create')->name('admin.rates.create');

Route::post('administrator/rates','Administrator\RateController@store')->name('admin.rates.store');

Route::get('/administrator/rates','Administrator\RateController@index')->name('admin.rates.index');

Route::get('/administrator/rates/{rate}/edit','Administrator\RateController@edit')->name('admin.rates.edit');

Route::put('/administrator/rates/{rate}','Administrator\RateController@update')->name('admin.rates.update');

Route::delete('/administrator/rates/{rate}','Administrator\RateController@destroy')->name('admin.rates.destroy');

Route::get('/administrator/orders','Administrator\AdministratorController@getOrders')->name('admin.index.orders');

Route::get('/administrator/hubs','Administrator\HubController@index')->name('admin.hubs.index');

Route::get('/administrator/hubs/{hub}/edit','Administrator\HubController@edit')->name('admin.hubs.edit');

Route::put('/administrator/hubs/{hub}','Administrator\HubController@update')->name('admin.hubs.update');

Route::get('/administrator/hubs/create','Administrator\HubController@create')->name('admin.hubs.create');

Route::post('/administrator/hubs','Administrator\HubController@store')->name('admin.hubs.store');

Route::resource('administrator/faq', 'Administrator\Web\Faq\FaqController', ['except' => ['show']]);
Route::resource('administrator/faq-category', 'Administrator\Web\Faq\FaqCategoryController', ['except' => ['show']]);
Route::resource('administrator/announcements', 'Administrator\AnnouncementsController', ['except' => ['show']]);

/**
 * Fuiyoh Hubs
 */
Route::get('/hub/home','Hub\HomeController@index')->name('hub.index');

Route::get('/hub/orders/index','Hub\OrderController@index')->name('hub.orders.index');

//
Route::get('crew', 'ComingSoonController@show')->name('crew');
Route::get('pos', 'ComingSoonController@show')->name('pos');


/****
 * STRIPE PAYMENT
 */

Route::get('/payment-page','StripeController@index')->name('payment.index');

Route::post('/charge','StripeController@store')->name('payment.success');


//Test order form
Route::get('/order-form','Dashboard\OrderController@test')->name('test');
