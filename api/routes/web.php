<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
// -- inicio de mi app
Route::get('/',[ApiController::class,'jalar'])->name('inicio');

// -- Api Rick and Morty
Route::post('/',[ApiController::class,'jalar2'])->name('jalar2');

