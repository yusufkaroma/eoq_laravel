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

Route::get('login',[App\Http\Controllers\CustomLoginController::class,'index'])->name('login');
Route::post('login',[App\Http\Controllers\CustomLoginController::class,'authenticate'])->name('authenticate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/admin', [App\Http\Controllers\adminController::class, 'index']);
});
Route::group(['middleware' => ['auth','gudang']], function () {
    Route::get('/gudang', [App\Http\Controllers\gudangController::class, 'index']);
});
Route::group(['middleware' => ['auth','manager']], function () {
    Route::get('/manager', [App\Http\Controllers\managerController::class, 'index']);
});
Route::group(['middleware' => ['auth','pesan']], function () {
    Route::get('/pesan', [App\Http\Controllers\pesanController::class, 'index']);
});

