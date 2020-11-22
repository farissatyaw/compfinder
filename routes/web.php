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

Auth::routes();

Route::get('/admin/login', function () {
    return view('auth-admin.login');
})->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login']);
Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout']);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth:admins');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
