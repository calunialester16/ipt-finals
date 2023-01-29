<?php
use App\Http\Controllers\ComposerController;
use App\Http\Controllers\MusicController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/composers',[ComposerController::class, 'index']);
Route::get('/composers/{composer}',[ComposerController::class,'show']);
Route::post('/composers',[ComposerController::class, 'store']);
Route::put('/composers/{composer}', [ComposerController::class, 'update']);
Route::delete('/composers/{composer}',[ComposerController::class, 'destroy']);

Route::get('/musics',[MusicController::class, 'index']);
Route::get('/musics/{music}',[MusicController::class,'show']);
Route::post('/musics',[MusicController::class, 'store']);
Route::put('/musics/{music}', [MusicController::class, 'update']);
Route::delete('/musics/{music}',[MusicController::class, 'destroy']);

