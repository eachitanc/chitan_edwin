<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [InicioController::class, 'getIndex'])->name('home');
Route::get('/libros', [AdminController::class, 'getLibros'])->name('libros');
Route::get('/editoriales', [AdminController::class, 'getEditorial'])->name('editoriales');
Route::get('/actualizar/libros/{id}', [AdminController::class, 'upformLibro'])->name('formUpLibro');
Route::get('/registrar/libros', [AdminController::class, 'regLibro'])->name('formRegistrarLibro');
Route::post('/registrar/libro/exito', [AdminController::class, 'regExito'])->name('regExitoso');
Route::post('/actualizar/libro/exito', [AdminController::class, 'upExito'])->name('act_Exitosa');