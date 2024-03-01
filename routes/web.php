<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/data', [DataController::class, 'index']);
    Route::get('/data/create', [DataController::class, 'create']);
    Route::post('/data/store', [DataController::class, 'store']);
    Route::get('/data/{id}/edit', [DataController::class, 'edit']);
    Route::put('/data/{id}/', [DataController::class, 'update']);
    Route::delete('/data/{id}/', [DataController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
