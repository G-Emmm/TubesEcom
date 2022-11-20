<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\PerizinanUserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/subs', 'HomeAdminController@index')
        ->name('homeadmin');
        Route::get('/tenant', 'TenantController@index')
        ->name('tenant');
    });

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::prefix('perizinan')->name('perizinan.')->group(function () {
    Route::get('/', [PerizinanUserController::class, 'index'])->name('index');
    Route::get('/create', [PerizinanUserController::class, 'create'])->name('create');
    Route::post('/store', [PerizinanUserController::class,'store'])->name('store');
    Route::delete('/delete/{id}',[PerizinanUserController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}',[PerizinanUserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}',[PerizinanUserController::class, 'update'])->name('update');
});

Route::prefix('user')
    ->namespace('App\Http\Controllers\User')
    ->group(function(){
        Route::get('/home', 'HomeController@index')
        ->name('home');
    });

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Auth::routes();