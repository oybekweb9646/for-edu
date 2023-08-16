<?php

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

Route::get('/info', function () {
    return view('info');
})->name('info');
Route::get('/form', function () {
    return view('form');
});

Route::post('/create', [\App\Http\Controllers\PostController::class,'create'])->name('info.create');
Route::post('/update/{post}', [\App\Http\Controllers\PostController::class,'update'])->name('info.update');
Route::get('/index', [\App\Http\Controllers\PostController::class,'index'])->name('index');

