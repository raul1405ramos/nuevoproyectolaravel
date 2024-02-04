<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', ClientController::class . '@index')-> name('cliente.index');
Route::get('/cliente/create', ClientController::class . '@create')-> name('cliente.create');
Route::post('/cliente', ClientController::class . '@store')-> name('cliente.store');
Route::get('/cliente/show', ClientController::class . '@show')-> name('cliente.show');
Route::get('/cliente/{cliente}/edit', ClientController::class . '@edit')-> name('cliente.edit');
Route::put('/cliente/{cliente}', ClientController::class . '@update')-> name('cliente.update');
Route::delete('/cliente/{cliente}', ClientController::class . '@destroy')-> name('cliente.destroy');
