<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/anime', [AnimeController::class, 'index']);
Route::get('/anime/{id}', [AnimeController::class, 'show']);
Route::post('/anime', [AnimeController::class, 'store']);
Route::put('/anime/{id}', [AnimeController::class, 'update']);
Route::delete('/anime/{id}', [AnimeController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
