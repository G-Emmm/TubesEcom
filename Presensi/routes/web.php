<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

use App\Http\Controllers\User\PerizinanUserController;



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
    ->group(function(){
        Route::get('/subs', 'HomeAdminController@index')
        ->name('homeadmin');
        Route::get('/tenant', 'TenantController@index')
        ->name('tenant');
    });

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('perizinan')->name('perizinan.')->group(function () {
    Route::get('/', [PerizinanUserController::class, 'index'])->name('index');
    
});
