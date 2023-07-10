<?php

use App\Http\Controllers\SoldadoController;
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
Route::post('soldados', [SoldadoController::class,'store'])->name('soldados.store');
Route::get('soldados/create',[SoldadoController::class,'create']);

Route::post('cuartels', [SoldadoController::class,'store'])->name('cuartels.store');
Route::get('cuartels/create',[SoldadoController::class,'create']);
