<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api1Controller;
use App\Http\Controllers\Api2Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('/');
Route::post('loginstore', [AuthController::class, 'loginstore'])->name('loginstore'); 
Route::get('registration', [AuthController::class, 'registerform'])->name('register');
Route::post('registerstore', [AuthController::class, 'registerstore'])->name('registerstore'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/api1view', [Api1Controller::class, 'Api1data']);
Route::get('/api2view', [Api2Controller::class, 'Api2data']);
