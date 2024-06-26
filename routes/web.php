<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManufacturerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CarsController::class, 'index']);

Route::get('/manufacturers', [ManufacturerController::class, 'index']);

Route::get('/cars/create', [CarsController::class, 'create'])->middleware('auth');
Route::post('/cars/create', [CarsController::class, 'store'])->middleware('auth');

Route::get('/cars/{car}', [CarsController::class, 'show']);

Route::get('/cars/{car}/edit', [CarsController::class, 'edit'])->middleware('auth');
Route::put('/cars/{car}/edit', [CarsController::class, 'update'])->middleware('auth');

Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'show'])
        ->name('login');

    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});




