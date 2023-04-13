<?php

use App\Http\Controllers\paymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminHomeController;

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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/con', [HomeController::class, 'Contact'])->name('contact');
Route::post('/districts', [HomeController::class, 'districts']);
Route::post('/upazila', [HomeController::class, 'upazila']);
Route::post('/union', [HomeController::class, 'union']);
Route::get('/division', [HomeController::class, 'division']);
Route::get('/getBashaFrontend', [HomeController::class, 'getBashaFrontend']);
Route::get('/bas/{id}', [HomeController::class, 'basha_details'])->name('basha_details');
Route::get('/bashabooking/{id}', [HomeController::class, 'basha_booking'])->name('booking');
Route::get('/basha_search', [HomeController::class, 'getBashaFrontend'])->name('basha_search');


//Admin Section

Route::get('/admin', [AdminHomeController::class, 'Home'])->name('dashboard');
Route::get('/basha_list', [AdminHomeController::class, 'BashaList'])->name('basha_list');
Route::post('/bashaAdd', [AdminHomeController::class, 'bashaAdd']);
Route::get('/getbasha', [AdminHomeController::class, 'getbasha']);
Route::post('/editbasha', [AdminHomeController::class, 'editbasha']);
Route::post('/BashaUpdateConfirmBtn', [AdminHomeController::class, 'updatebasha']);
Route::post('/bashaDelete', [AdminHomeController::class, 'bashaDelete']);


Route::get('/customer', [AdminHomeController::class, 'Customer'])->name('customer.list');
Route::get('/getcustomer', [AdminHomeController::class, 'GetCustomer']);

Route::get('/user', [AdminHomeController::class, 'User'])->name('user.list');
Route::get('/getuser', [AdminHomeController::class, 'GetUser']);

Route::get('/BookingDetails', [AdminHomeController::class, 'BookingDetails']);

//End Section


///Payment Gateway
Route::get('/payment{id}', [paymentController::class, 'index'])->name('payment');
Route::post('/success', [paymentController::class, 'success'])->name('success');
Route::post('/fail', [paymentController::class, 'fail'])->name('fail');


Auth::routes();



/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {



    Route::get('/home', [HomeController::class, 'Home'])->name('home');

});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {


    Route::get('/admin', [AdminHomeController::class, 'Home'])->name('dashboard');
//   Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {



    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});
