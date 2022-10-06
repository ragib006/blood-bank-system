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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//frontend page display
Route::get('/', [App\Http\Controllers\AdminController::class, 'frontendpageshow']);

//blood_doner_from_submit

Route::post('/blood_doner_from_submit', [App\Http\Controllers\AdminController::class, 'blooddonerfromsubmit']);

//admin login page show

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'adminloginpageshow']);


//admin-login-from-action

Route::post('/admin-login-from-action', [App\Http\Controllers\AdminController::class, 'adminloginfromaction']);


//admin_dashboard_page show



Route::get('/admin_dashboard', [App\Http\Controllers\AdminController::class, 'admindashboardpageshow']);

//blood_doner_delete


Route::get('/blood_doner_delete/{doner_id}', [App\Http\Controllers\AdminController::class, 'blooddonerdelete']);

//doner_status_success


Route::get('/doner_status_success/{doner_id}', [App\Http\Controllers\AdminController::class, 'donerstatussuccess']);

//log_out


Route::get('/log_out', [App\Http\Controllers\AdminController::class, 'adminlogout']);

