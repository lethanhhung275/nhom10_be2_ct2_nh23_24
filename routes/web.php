<?php

use App\Http\Controllers\WelcomeController;
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


Route::get('/', [WelcomeController::class, 'index']);
Route::get('shop', [WelcomeController::class, 'shop']);
Route::get('login', [WelcomeController::class, 'login']);
Route::get('single-product', [WelcomeController::class, 'singleProduct']);
Route::get('my-account', [WelcomeController::class, 'myAccount']);
Route::get('contact', [WelcomeController::class, 'contact']);
Route::get('checkout', [WelcomeController::class, 'checkout']);
Route::get('cart', [WelcomeController::class, 'cart']);
Route::get('blog', [WelcomeController::class, 'blog']);