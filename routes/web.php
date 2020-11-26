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

Route::get('/user/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');
Route::get('/user/competitions', [App\Http\Controllers\RegisteredUserController::class, 'index'])->name('user.competitions');
Route::post('/user/register', [App\Http\Controllers\RegisteredUserController::class, 'add']);

Route::get('/co/dashboard', [App\Http\Controllers\COController::class, 'index'])->name('CO.dashboard');
Route::get('/co/competitions/add', [App\Http\Controllers\COController::class, 'add'])->name('CO.addcompetitions');
Route::post('/co/competitions/add', [App\Http\Controllers\COController::class, 'create'])->name('CO.createcompetitions');
