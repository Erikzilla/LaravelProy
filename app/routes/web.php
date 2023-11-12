<?php

use App\Models\User;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SensorController;

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

//Homepage////////////////////////////////////
Route::get('/', function () {
    return view('agregar-users');
});
//////////////////////////////////////////////

//Access to app views/////////////////////////
Route::get('/agregar-sensores', function () {
    return view('agregar-sensores');
});
Route::get('/agregar-users', function () {
    return view('agregar-users');
});
Route::get('/lista-sensores', function () {
    $sensors = Sensor::all();
    return view('lista-sensores', ['sensors' => $sensors]);
});
Route::get('/lista-users', function () {
    $users = User::all();
    return view('lista-users', ['users'=> $users]);
});
Route::get('/notificaciones', function () {
    return view('notificaciones');
});
Route::get('/registro-historico', function () {
    return view('registro-historico');
});
//////////////////////////////////////////////

//User registry///////////////////////////////
Route::post('/registerUser', [UserController::class, 'registerUser']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
//////////////////////////////////////////////

//Sensor registry/////////////////////////////
Route::post('/addSensor', [SensorController::class, 'addSensor']);
//////////////////////////////////////////////