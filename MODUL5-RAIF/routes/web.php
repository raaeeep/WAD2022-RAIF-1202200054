<?php

use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserController;
use App\Models\Showroom;
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
    return view('home', ['title' => 'Home']) ;   
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource('showroom', ShowroomController::class);

Route::get('detail', [ShowroomController::class, 'detail'])->name('detail');

Route::get('/showroom/detail/{id}', [ShowroomController::class, 'detail']);
Route::get('/showroom/edit/{id}', [ShowroomController::class, 'edit']);
Route::post('/showroom/update/{id}', [ShowroomController::class, 'update']);
