<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasControlador;
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

        
Route::resource('personas', PersonasControlador::class)->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('bienvenido');
})->middleware(['auth'])->name('dashboard');


Route::get('/formulario', function () {
    return view('personas');
})->middleware(['auth'])->name('formulario');

/* Route::get('/dashboard', function () {
    return view('personas');
})->middleware(['auth'])->name('dashboard'); */

/* Route::get('/Listar', function () {
    return view('listarPersonas');
})->middleware(['auth'])->name('Listar'); */

require __DIR__.'/auth.php';
