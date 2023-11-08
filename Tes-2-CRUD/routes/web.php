<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

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

Route::prefix('formulir')->group(function () {
    Route::get('/', [FormulirController::class, 'index'])->name('formulir');
    Route::get('/create', [FormulirController::class, 'create'])->name('formulir.create');
    Route::post('/store', [FormulirController::class, 'store'])->name('formulir.store');
    Route::get('/edit/{id}', [FormulirController::class, 'edit'])->name('formulir.edit');
    Route::post('/update/{id}', [FormulirController::class, 'update'])->name('formulir.update');
    Route::delete('/delete/{id}', [FormulirController::class, 'destroy'])->name('formulir.delete');
    Route::get('/view/{id}', [FormulirController::class, 'view'])->name('formulir.view');
});
