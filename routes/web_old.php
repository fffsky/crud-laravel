<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/top',[MemberController::class,'top'])->name('top');

Route::get('/memberView',[MemberController::class,'memberView'])->name('memberViewr');

Route::get('/register1',[MemberController::class,'register'])->name('register');

Route::post('/memberRegister',[MemberController::class,'memberRegister']);

Route::get('/edit/{id}', [MemberController::class, 'edit']);

Route::post('/memberEdit', [MemberController::class, 'memberEdit']);

Route::get('/memberDelete/{id}', [MemberController::class, 'memberDelete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
