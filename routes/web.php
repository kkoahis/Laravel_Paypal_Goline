<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Paypal */
Route::post('paypal/payment', [App\Http\Controllers\PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [App\Http\Controllers\PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [App\Http\Controllers\PaypalController::class, 'cancel'])->name('paypal_cancel');