<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\MypageController;


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

Route::middleware('auth')->group(
    function () {
        Route::get('/', [AuthController::class, 'index']);
    }
);

Route::get('/', [ShopController::class, 'index']);

Route::get('/shop_detail/{id}', [ShopDetailController::class, 'index'])->name('shop_detail');

Route::get('/shop_favorite/{id}', [ShopController::class, 'create'])->name('shop_favorite');

Route::post('/reservations', [ShopDetailController::class, 'create']);

Route::get('/my_page', [MypageController::class, 'index']);
