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

Route::get('/customerHomepage', 'CustomerController@index')->name('customer')->middleware('customer');
Route::get('/riderHomepage', 'RiderController@index')->name('rider')->middleware('rider');
Route::get('/staffHomepage', 'StaffController@index')->name('staff')->middleware('staff');

// staffHomepage Display
Route::get('/home', 'StaffController@create')->name('account:staffHomepage');

Route::get('/account/staffHomepage','StaffController@create')->name('account:staffHomepage');

Route::get('/account/customerProfileList','StaffController@indexCustomer')->name('account:customerProfileList');

Route::get('/{customer}','StaffController@showCustomer')->name('account:customerProfile');

Route::post('/{customer}/destroy','StaffController@destroyCustomer')->name('destroyCustomer'); // delete=destroy

Route::get('/account/riderProfileList','StaffController@indexRider')->name('account:StaffProfileList');



// customerHomepage Display
//Route::get('/registration/customerHomepage','CustomerController@create')->name('registration:customerHomepage');

//customer registration
//Route::get('/registration/registercustomer','CustomerController@create')->name('registration:registercustomer');
Route::get('/registration/registercustomer', function () {
    return view('/registration/registercustomer');
});
Route::post('submit','CustomerController@storetocustomer');



//rider registration

Route::get('/registration/registerrider', function () {
    return view('registration/registerrider');
});
Route::post('submit','RiderController@storetorider');

Route::get('/registration/riderHomepage', function () {
    return redirect('/registration/riderHomepage');
});





// staffHomepage Display
Route::get('/account/staffHomepage','StaffController@create')->name('account:staffHomepage');
Route::get('/account/customerProfileList','StaffController@index')->name('account:customerProfileList');


//service module
Route::resource('services','ServiceController');

Route::get('riderhome', function () {
    return view('riderHomepage');
})->middleware('auth', 'checkuser:runner@runner.com');

Route::get('customerHome', function () {
    return view('customerHome');
})->middleware('auth', 'checkuser:customer@customer.com');



//Payment
Route::get('/payment', function () {
    return view('payment/payment');
});

Route::get('/paymentoption', function () {
    return view('payment/paymentoption');
});


Route::get('/cod', function () {
    return view('payment/cashondelivery');
});

Route::get('/onlinebanking', function () {
    return view('payment/onlinebanking');
});

Route::post('submit','PaymentController@savetodatabase');

Route::post('submit','PaymentController@savetodatabase1');



Route::get('/payment/customerpaymentlist','PaymentController@index')->name('payment:customerpaymentlist');

Route::post('/payment/cashondeliveryinsert','StudInsertController@insert');

Route::post('/payment/cashondeliveryinsert','StudInsertController@insert');

