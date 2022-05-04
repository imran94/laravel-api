<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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

Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/{id}',  [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);

Route::put('articles/{id}', [ArticleController::class, 'update']);

Route::delete('articles/{id}', [ArticleController::class, 'delete']);
