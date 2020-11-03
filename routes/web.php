<?php

use App\Http\Controllers\FirebaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\LoginController;
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
Route::view('login', 'user-login');
Route::post('userlogin', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);
Route::view('register', 'user-register');
