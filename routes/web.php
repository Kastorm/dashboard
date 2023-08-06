<?php

use App\Http\Middleware\AdminPanelMiddleware;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Роуты по админке контролеры с одним действием
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/', IndexController::class)->name('admin');
      // Роуты по админке Bot
       Route::prefix('bot')->namespace('Bot')->group(function () {
       Route::get('/','IndexController')->name('bot.index');
   });
    // Роуты по админке  Пользователи
    Route::prefix('user')->namespace('User')->group(function () {
        Route::get('/','IndexController')->name('user.index');
        Route::get('/create','CreateController')->name('user.create');
        Route::post('/','StoreController')->name('user.store');
        Route::get('/{user}','ShowController')->name('user.show');
        Route::get('/{user}/edit','EditController')->name('user.edit');
        Route::patch('/{user}','UpdateController')->name('user.update');
        Route::delete('/{user}','DeleteController')->name('user.delete');;
    });
    // Роуты по админке руппа Role
    Route::prefix('role')->namespace('Role')->group(function () {
        Route::get('/','IndexController')->name('role.index');
        Route::get('/create','CreateController')->name('role.create');
        Route::post('/','StoreController')->name('role.store');
        Route::get('/{role}','ShowController')->name('role.show');
        Route::get('/{role}/edit','EditController')->name('role.edit');
        Route::patch('/{role}','UpdateController')->name('role.update');
        Route::delete('/{role}','DeleteController')->name('role.delete');
    });
});


