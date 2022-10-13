<?php

use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Role\IndexRoleController;


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

    // Роуты по админке руппа Role
    Route::prefix('role')->namespace('Role')->group(function () {
        Route::get('/',IndexRoleController::class)->name('role');
    });
});


