<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
});

Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('/create-shoe', [ShoeController::class, 'createShoe']);
    Route::post('/create-shoe1', [ShoeController::class, 'createShoe1']);
    Route::get('/edit-shoe/{id}', [ShoeController::class, 'editShoe']);
    Route::patch('/update-shoe/{id}', [ShoeController::class, 'updateShoe']);
    Route::delete('/delete-shoe/{id}', [ShoeController::class, 'deleteShoe']);
});

Route::get('/read-shoes', [ShoeController::class, 'readShoes']);

// Category 
Route::get('/create-category', [CategoryController::class, 'createCategory']);
Route::post('/create-category1', [CategoryController::class, 'createCategory1']);
