<?php

use App\Http\Controllers\AdminController;
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

// Unincluded routes
Route::get('/create_order', fn () => view('dashboard.create_order'))->name('createorder');
Route::get('/wallet/fund', fn () => view('dashboard.fundwallet'))->name('fundwallet');
Route::get('/manual-payment', fn () => view('dashboard.fundmanual'))->name('fundmanual');
Route::get('/crypto-payment', fn () => view('dashboard.fundcrypto'))->name('fundcrypto');

// dashboard routes
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/payment/history', [UserController::class, 'transactions'])->name('paymenthistory');
Route::post('/create_order', [UserController::class, 'createOrder'])->name('createorder');
Route::get('/orders', [UserController::class, 'orders'])->name('orders');
Route::post('/getunitprice/', [UserController::class, 'getUnitPrice'])->name('getunitprice');

// Payment routes
Route::post('/createtransaction', [PaymentController::class, 'createTransaction'])->name('createtransaction');
Route::post('/verifytransaction', [PaymentController::class, 'verifyTransaction'])->name('verifytransaction');

// Administrator routes
Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/users/', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/user/{id}/', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/orders/', [AdminController::class, 'orders'])->name('admin.orders');
Route::get('/admin/order/{id}', [AdminController::class, 'order'])->name('admin.order');
Route::get('/admin/settings/', [AdminController::class, 'settings'])->name('settings');

});

