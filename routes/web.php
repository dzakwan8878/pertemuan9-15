<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/walcome', function () {
     echo "Selamat datang di laravel";
});
Route:: get ('/greeting', function() {
     return view ('greeting');
});
Route::get('/mobil',function (){
    return view('index');
});

Route::middleware(['auth'])->group(function () {

Route::get('/mobil',[MobilController::class, 'index']);
Route::get('/mobil/create',[MobilController::class,'create']);
Route::post('/mobil/store',[MobilController::class,'store']);
Route::get('/merk',[MerkController::class,'store']);

Route::get('/merk',[MerkController::class,'index']);
Route::get('/merk/create',[MerkController::class,'create']);
Route::post('/merk/simpan-data',[MerkController::class,'store']);

Route::get('/merk/edit/{id}',[MerkController::class, 'fromEdit']);
Route::post('/merk/update/{id}',[MerkController::class, 'update']);
Route::get('/merk/delete/{id}',[MerkController::class, 'delete']);


Route::get('/tipemobil',[TipemobilController::class, 'index']);
Route::get('/tipemobil/create',[TipeMobilController::class, 'create']);
Route::post('/tipemobil/simpan-data',[TipeMobilController::class, 'store']);
Route::get('/tipemobil/edit/{id}',[TipeMobilController::class, 'formEdit']);
Route::post('/tipemobil/update/{id}',[TipeMobilController::class, 'update']);
Route::get('/tipemobil/delete/{id}',[TipeMobilController::class, 'delete']);
});


Route::get('/login',[Auth\LoginController::class, 'index'])->name('login');
Route::post('/login/proses',[Auth\LoginController::class, 'login']);
Route::get('/register',[Auth\RegisterController::class, 'index']);
Route::post('/register/proses',[Auth\RegisterController::class, 'register']);
Route::get('/logout',[Auth\LoginController::class, 'logout']);

