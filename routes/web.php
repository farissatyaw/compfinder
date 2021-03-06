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
    return view('auth.login');
});

Auth::routes();

Route::get('/admin/login', function () {
    return view('auth-admin.login');
})->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login']);

Route::group([ "middleware" => ['auth:admins', 'verified'] ], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('auth:admins');
    Route::get('/admin/competitions', [App\Http\Controllers\AdminController::class, 'competitionsindex'])->name('admin.competition');
    Route::post('/admin/competitions/verify', [App\Http\Controllers\AdminController::class, 'verifycompetition']);
    Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout']);
});

Route::group([ "middleware" => ['auth', 'verified'] ], function () {
    //User
    Route::get('/user/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/competitions', [App\Http\Controllers\RegisteredUserController::class, 'index'])->name('user.competitions');
    Route::post('/user/register', [App\Http\Controllers\RegisteredUserController::class, 'add']);
    Route::post('/user/addbuktibayar', [App\Http\Controllers\RegisteredUserController::class, 'addbuktibayar']);
    Route::get('/user/search', [App\Http\Controllers\UserController::class, 'search']);

    //Competition Official
    Route::get('/co/dashboard', [App\Http\Controllers\COController::class, 'index'])->name('CO.dashboard');
    Route::get('/co/competitions/add', [App\Http\Controllers\COController::class, 'add'])->name('CO.addcompetitions');
    Route::post('/co/competitions/add', [App\Http\Controllers\COController::class, 'create'])->name('CO.createcompetitions');
    Route::get('/co/competitions/{competition}', [App\Http\Controllers\COController::class, 'show'])->name('CO.competitions');
});
