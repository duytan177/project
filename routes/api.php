<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisterController::class,'create'])->name('Register');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/',[LoginController::class,'showLoginForm']);

Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::prefix('/admin')->middleware('auth')->group( function() {
    Route::get('/invoice/index1', [HomeController::class, 'index1'])->name('invoice1');
    Route::get('/setting',[HomeController::class,'setting'])->name('setting');
    Route::get('/invoice/index2', [HomeController::class, 'index2'])->middleware('admin')->name('invoice2');
    Route::get('/user',[UserController::class,'index'])->middleware('admin')->name('user');
    Route::get('/detail/{id}',[UserController::class,'show'])->name('detail');
    Route::get('/create',[UserController::class,'create'])->name('create');
    Route::post('/store',[UserController::class,'store'])->name('store');
    Route::put('/update/{id}',[UserController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('destroy');
    Route::get('/promotion',[HomeController::class,'promotion'])->name('promotion');

    Route::get('/dashboard',function(){
        return view('layouts.dashboard');
    })->middleware('user')->name('dashboard');
    Route::get('/turnovel',function(){
        return view('layouts.turnovel');
    });
    Route::get('/invoice',function(){
        return view('user.invoice');
    });
});
Route::prefix('/user')->group( function() {
    Route::get('/sponsorship', [\App\Http\Controllers\SponsorshipController::class, 'index1'])->name('sponsor');
    Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
    Route::get('/profile/create',[\App\Http\Controllers\ProfileController::class,'create'])->name('createProfile');
    Route::get('/profile/detail/{id}',[\App\Http\Controllers\ProfileController::class,'edit'])->name('detailProfile');
    Route::post('/profile',[\App\Http\Controllers\ProfileController::class,'storeFile'])->name('storeProfile');
    Route::delete('/profile/{id}',[\App\Http\Controllers\ProfileController::class,'destroy'])->name('destroyProfile');
    Route::get('/profile /{profile_id}/{id}',[\App\Http\Controllers\ProfileController::class,'show'])->name('showImage');
    Route::get('/profileview',[\App\Http\Controllers\ProfileController::class,'view'])->name('viewProfile');
    Route::post('/download-multiple-files',[\App\Http\Controllers\ProfileController::class,'downloadFile'])->name('download');
});

Route::get('/api', [\App\Http\Controllers\SponsorshipController::class, 'index'])->name('sponsor');

