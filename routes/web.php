<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/register', [RegisterController::class,'showRegister'])->name('register');
Route::post('/register', [RegisterController::class,'create'])->name('Register');
Route::post('/login',[LoginController::class,'Login'])->name('Login');
Route::get('/',[LoginController::class,'showLoginForm']);
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::prefix('/admin')->group( function() {
    Route::get('/invoice/index1', [HomeController::class, 'index1'])->name('invoice1');
    Route::get('/setting',[HomeController::class,'setting'])->name('setting');
    Route::get('/invoice/index2', [HomeController::class, 'index2'])->name('invoice2');
    Route::get('/user',[UserController::class,'index'])->middleware('admin')->name('user');
    Route::get('/detail/{id}',[UserController::class,'show'])->name('detail');
    Route::get('/create',[UserController::class,'create'])->name('create');
    Route::post('/store',[UserController::class,'store'])->name('store');
    Route::put('/update/{id}',[UserController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('destroy');
    Route::get('/promotion',[HomeController::class,'promotion'])->name('promotion');
    Route::get('/view',[HomeController::class,'view'])->name('view');
    Route::get('/dashboard',function(){
        return view('layouts.dashboard');
    })->middleware('user')->name('dashboard');
    Route::get('/turnovel',function(){
        return view('layouts.turnovel');
    });
    Route::get('/sponsorship',function(){
        return view('layouts.sponsorship');
    })->name('sponsor');
    Route::get('/invoice',function(){
        return view('user.invoice');
    });
    Route::get('/profile',function(){
        return view('layouts.profile');
    });
});





