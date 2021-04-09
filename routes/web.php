<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

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

Route::get('/', fn () => view('index'))->name('index');

Route::get('/contact', fn () => view('contact'))->name('contact');



Route::middleware('auth')->group(function(){

// Dashboard routes
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

Route::get('/create_order', fn () => view('dashboard.create_order'))->name('createorder');
Route::post('/create_order', [UserController::class, 'createOrder'])->name('createorder');

Route::get('/orders', [UserController::class, 'orders'])->name('orders');

Route::get('/wallet/fund', fn () => view('dashboard.fundwallet'))->name('fundwallet');

Route::get('/manual-payment', fn () => view('dashboard.fundmanual'))->name('fundmanual');

Route::get('/crypto-payment', fn () => view('dashboard.fundcrypto'))->name('fundcrypto');

Route::get('/payment/history', [UserController::class, 'transactions'])->name('paymenthistory');

Route::post('/createtransaction', [PaymentController::class, 'createTransaction'])->name('createtransaction');

Route::post('/verifytransaction', [PaymentController::class, 'verifyTransaction'])->name('verifytransaction');

});

