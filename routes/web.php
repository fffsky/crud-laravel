<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/top',[UserController::class,'top'])->name('top');

Route::get('/view',[UserController::class,'view'])->name('viewr');

Route::get('/register1',[UserController::class,'register'])->name('register');

Route::post('/userRegister',[UserController::class,'userRegister']);

Route::get('/edit/{id}', [UserController::class, 'edit']);

Route::post('/userEdit', [UserController::class, 'userEdit']);

Route::get('/userDelete/{id}', [UserController::class, 'userDelete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
