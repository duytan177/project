<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/home', function () {
    return view('welcome');
})->name('welcome');
Route::prefix('/admin')->middleware('auth')->group( function() {
    Route::get('/invoice/index1', [HomeController::class, 'index1'])->name('invoice1');
    Route::get('/setting',[HomeController::class,'setting'])->name('setting');
    Route::get('/invoice/index2', [HomeController::class, 'index2'])->name('invoice2');
    Route::get('/user',[HomeController::class,'user'])->name('user');
    Route::get('/detail',[HomeController::class,'detail'])->name('detail');
    Route::get('/promotion',[HomeController::class,'promotion'])->name('promotion');
});
Route::get('/demo',[HomeController::class, 'demo'])->name('demo');




