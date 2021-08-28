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

Route::get('/services', function () {
    return view('services');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});




Auth::routes();

Route::get('/customer/home', [App\Http\Controllers\HomeController::class, 'index'])->name('customer.home');

Auth::routes();

Route::get('/customer/service', [App\Http\Controllers\HomeController::class, 'logged_services'])->name('customer.logged_services');

Auth::routes();

Route::get('/customer/transactions', [App\Http\Controllers\HomeController::class, 'transactions'])->name('customer.transactions');

Auth::routes();

Route::get('/customer/notifications', [App\Http\Controllers\HomeController::class, 'notifications'])->name('customer.notifications');



