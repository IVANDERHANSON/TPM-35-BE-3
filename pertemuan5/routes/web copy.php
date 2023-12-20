<?php

use App\Http\Controllers\CategoryController;
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
Route::get('/edit-shoe/{id}', [ShoeController::class, 'editShoe']);
Route::patch('/update-shoe/{id}', [ShoeController::class, 'updateShoe']);
Route::delete('/delete-shoe/{id}', [ShoeController::class, 'deleteShoe']);

// Category 
Route::get('/create-category', [CategoryController::class, 'createCategory']);
Route::post('/create-category1', [CategoryController::class, 'createCategory1']);
