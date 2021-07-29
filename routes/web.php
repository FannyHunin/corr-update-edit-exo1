<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index'])->name('home');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('create');
Route::post('/animals', [AnimalController::class, 'store'])->name('store');
Route::get('/animals/{id}/show', [AnimalController::class, 'show'])->name('show');
Route::delete('/animals/{id}/delete', [AnimalController::class, 'destroy'])->name('delete');
Route::get('/animals/{id}/edit', [AnimalController::class, 'edit'])->name('edit');
Route::put('/animals/{id}/update', [AnimalController::class, 'update'])->name('update');