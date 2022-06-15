<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProvisionServer;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'AuthController@register');
Route::get('/register', [AuthController::class, 'register']);

Route::post('/simpanuser', [AuthController::class, 'simpanuser']);

Route::get('/', [AuthController::class, 'login']);

Route::post('/ceklogin', [AuthController::class, 'ceklogin']);