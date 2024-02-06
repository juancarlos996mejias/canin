<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\dogController;
use App\Http\Controllers\catController;
use App\Http\Controllers\productsController;
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

Route::get('/', [homeController::class, 'index']);

Route::get('/perros', [dogController::class, 'index']);

Route::get('/gatos', [catController::class, 'index']);

Route::get('/productos', [productsController::class, 'index']);

Route::get('/nosotros', function () {
    return view('nosotros');
});


Route::get('/contacto', function () {
    return view('contacto');
});
