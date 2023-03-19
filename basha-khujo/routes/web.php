<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'Home']);
Route::post('/districts', [HomeController::class, 'districts']);
Route::post('/upazila', [HomeController::class, 'upazila']);
Route::post('/union', [HomeController::class, 'union']);
Route::get('/division', [HomeController::class, 'division']);


//Admin Section

Route::get('/admin', [AdminHomeController::class, 'Home'])->name('dashboard');
Route::get('/basha_list', [AdminHomeController::class, 'BashaList'])->name('basha_list');

//End Section
