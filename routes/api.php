<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cats/{tag}', [CatApiController::class, 'search']); // Mover esta ruta arriba de las rutas con parámetro ID
Route::get('/cats', [CatApiController::class, 'index']);
Route::get('/cats/{id}', [CatApiController::class, 'show']);
