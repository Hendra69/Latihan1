<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ResellerController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('customer',CustomerController::class);
Route::post('/customer/create', [App\Http\Controllers\CustomerController::class, 'create']);
Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::post('/customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('/customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy']);

Route::resource('reseller',ResellerController::class);
Route::post('/reseller/create', [App\Http\Controllers\ResellerController::class, 'create']);
Route::get('/reseller/edit/{id}', [App\Http\Controllers\ResellerController::class, 'edit']);
Route::post('/reseller/update/{id}', [App\Http\Controllers\ResellerController::class, 'update']);
Route::get('/reseller/destroy/{id}', [App\Http\Controllers\ResellerController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
