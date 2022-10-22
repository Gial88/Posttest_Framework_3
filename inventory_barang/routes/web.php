<?php

use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('home',["barang" => Inventory::all()]);
})->name('home')->middleware(['auth']);;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/action-register', [AuthController::class , 'actionRegister']);
Route::post('/action-login', [AuthController::class , 'actionLogin']);
Route::get('/logout', [AuthController::class , 'logout']);  
Route::get('/login', [AuthController::class , 'loginView'])->name("login");
