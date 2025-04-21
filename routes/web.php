<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);


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

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});