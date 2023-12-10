<?php

use App\Http\Controllers\ShoeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create-shoe', [ShoeController::class, 'createShoe']);
Route::post('/create-shoe1', [ShoeController::class, 'createShoe1']);
Route::get('/read-shoes', [ShoeController::class, 'readShoes']);
