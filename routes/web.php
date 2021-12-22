<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CadEmpresaController;
use App\Http\Controllers\CadEmpregadoController;



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

Route::get('/', [CadEmpresaController::class, 'index']);

Route::get('/create', [CadEmpresaController::class, 'create']);
Route::post('/create', [CadEmpresaController::class, 'store']);
Route::get('/search', [CadEmpresaController::class, 'search']);
Route::get('/edit/{id}', [CadEmpresaController::class, 'edit']);
Route::put('/edit/{id}', [CadEmpresaController::class, 'update']);
Route::get('/show/{id}', [CadEmpresaController::class, 'show']);



Route::get('/empregados/{id}', [CadEmpregadoController::class, 'index']);
Route::get('/empregados/create/{id}', [CadEmpregadoController::class, 'create']);
Route::post('/empregados/create/', [CadEmpregadoController::class, 'store']);
Route::get('/empregados/{id}/search', [CadEmpregadoController::class, 'search']);
Route::get('/empregados/edit/{id}', [CadEmpregadoController::class, 'edit']);
Route::put('/empregados/edit/{id}', [CadEmpregadoController::class, 'update']);
Route::get('/empregados/show/{id}', [CadEmpregadoController::class, 'show']);


Route::get('/register',[RegisterController::class, 'create'])->name('register.index');
Route::get('/login',[SessionsController::class, 'create'])->name('login.index');



