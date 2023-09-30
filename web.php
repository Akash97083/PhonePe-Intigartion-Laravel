<?php

use App\Http\Controllers\PhonepayController;
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

Route::get('/', [PhonepayController::class, 'index']);
//++++++++++++++++++++++++++++++++++++++++++++++
//The Payment Route For The Product
//+++++++++++++++++++++++++++++++++++++++++++++
Route::get('pay', [PhonepayController::class, 'payment_init']);
Route::get('pay-refund-view', [PhonepayController::class, 'refund']);
Route::get('pay-refund', [PhonepayController::class, 'payment_refund']);
Route::any('pay-return-url', [PhonepayController::class, 'payment_return'])->name('pay-return-url');
Route::post('pay-callback-url', [PhonepayController::class, 'payment_callback'])->name('pay-callback-url');
Route::any('pay-refund-callback', [PhonepayController::class, 'payment_refund_callback'])->name('pay-refund-callback');
