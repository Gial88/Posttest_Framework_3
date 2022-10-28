<?php

use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;


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
Route::get('/',[InventoryController::class,'index'])->name("home")->middleware('auth');
Route::get('/tambah',[InventoryController::class,'tambah'])->name("tambah")->middleware('auth');
Route::post('/tambah-data',[InventoryController::class,'simpan'])->name("simpan")->middleware('auth');
Route::get('/show/{id}',[InventoryController::class,'lihat'])->name("lihat")->middleware('auth');
