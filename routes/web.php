<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

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


Route::domain('{domain}.wildcard.test')->group(function () {
    Route::get('/domain', [ProgramController::class, 'index'])->name('program');
});

Route::get('/create', [ProgramController::class, 'createForm'])->name('create.form');
Route::post('/create', [ProgramController::class, 'createProgram'])->name('create.program');


