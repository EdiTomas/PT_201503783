<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('Login.index');
});

Route::get('/Ahorro', function () {
    return view('CuentaAhorro.index');
});

Route::post('/Ahorro',[ClienteController::class,'store'] )->name('Ahorro');
Route::post('/Login',[LoginController::class,'store'] )->name('Login');



Route::get('/Operaciones', function () {
    return view('Transacciones.index');
});

Route::get('/Saldos', function () {
    return view('Saldos.index');
});

