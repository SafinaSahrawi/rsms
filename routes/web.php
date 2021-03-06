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


//Display User Homepage based on role type
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customerHomepage', 'CustomerController@index')->name('customer')->middleware('customer');
Route::get('/riderHomepage', 'RiderController@index')->name('rider')->middleware('rider');
Route::get('/staffHomepage', 'StaffController@index')->name('staff')->middleware('staff');

// staffHomepage Display
Route::get('/home', 'StaffController@create')->name('account:staffHomepage');

Route::get('/account/staffHomepage','StaffController@create')->name('account:staffHomepage');

Route::get('/account/customerProfileList','StaffController@indexCustomer')->name('account:customerProfileList');


Route::get('/account/customerProfileList','StaffController@index')->name('account:customerProfileList');

Route::get('/{userList}','StaffController@showCustomer')->name('account:customerProfile');

Route::post('/{customer}/destroy','StaffController@destroy')->name('destroyCustomer'); // delete=destroy

Route::get('/account/riderProfileList','StaffController@index')->name('account:riderProfileList');



Route::get('/account/riderProfileList','StaffController@indexRider')->name('account:StaffProfileList');


//customer registration
Route::get('/registration/registercustomer', function () {
    return view('registration/registercustomer');
});
Route::post('submit','CustomerController@storetocustomer');
Route::post('submit','CustomerController@index');


// customerHomepage Display
Route::get('/registration/customerHomepage', function () {
    return redirect('/registration/customerHomepage');
});

Route::get('/welcome', function () {
    return redirect('/welcome');
});



//rider registration

Route::get('/registration/registerrider', function () {
    return view('registration/registerrider');
});
Route::post('submit','RiderController@storetorider');
Route::post('submit','RiderController@index');

Route::get('/registration/riderHomepage', function () {
    return redirect('/registration/riderHomepage');
});




// staffHomepage Display
Route::get('/account/staffHomepage','StaffController@create')->name('account:staffHomepage');
Route::get('/account/customerProfileList','StaffController@index')->name('account:customerProfileList');


//service module
Route::resource('services','ServiceController');

Route::get('insert','ServiceController@create');
Route::post('create','ServiceController@store');

Route::get('services/{service}/edit','ServiceController@edit');
Route::match(['put', 'patch'], 'services/{service}','ServiceController@update');


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



//Delivery
Route::get('/pickupanddelivery/option', function () {
    return view('delivery/customer_pickup_delivery_option');
});

Route::get('/delivery/pickup', function () {
    return view('delivery/customer_pickup_details');
});

Route::get('/delivery/delivery', function () {
    return view('delivery/customer_delivery_details');
});

Route::post('submit','PickupController@savetopickup');

Route::post('submit','DeliveryController@savetodelivery');

Route::get('/cod', function () {
    return view('payment/cashondelivery');

});

Route::get('/onlinebanking', function () {
    return view('payment/onlinebanking');
});

Route::post('submit','PaymentController@savetodatabase');

Route::post('submit','PaymentController@savetodatabase1');


Route::get('/payment/customerpaymentlist','PaymentController@index')->name('payment:customerpaymentlist');


Route::get('/payment/customerpaymentlist1','PaymentController@indexdetails')->name('payment:customerpaymentlist1');

Route::post('/payment/customerpaymentlist1','PaymentController@destroy')->name('payment:customerpaymentlist1');

Route::get('/staffpaymentoption', function () {
    return view('payment/staffpaymentoption');
});


Route::get('/payment/customerpaymentlist','PaymentController@index')->name('payment:customerpaymentlist');


