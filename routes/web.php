<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MerekController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TasController;
use App\Http\Controllers\DashboardController;

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
// Route::group(['prefix' => 'admin' , 'middleware'
// => ['auth', 'isAdmin']], function () {
//     Route::resource('merek', MerekController::class);
// });

Route::get('/produk', function () {
    return view('layouts.user2');
});

Route::get('/detail', function () {
    return view('admin.frontend');
});

Auth::routes();

//untuk memanggil user.
Route::resource('', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::resource('/', DashboardController::class);
    Route::resource('merek', MerekController::class);
    Route::resource('tas', MerekController::class);
});