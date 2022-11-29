<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MerekController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TasController;
use App\Http\Controllers\DashboardController;
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
    return view('layouts.admin');
});

Route::get('/dashboard', function () {
    return view('admin.frontend');
});
Route::resource('merek', MerekController::class);
Route::resource('tas', TasController::class);
Route::resource('merek', MerekController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('pemesan', PemesanController::class);
Route::resource('pemesan', PesananController::class);
Auth::routes();

//untuk memanggil user.
Route::get('/user', function () {
    return view('layouts.user');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['prefix' => 'admin' , 'middleware'
// => ['auth', 'isAdmin']], function () {
//     Route::resource('merek', MerekController::class);
// });
