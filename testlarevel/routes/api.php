<?php


use App\Http\Controllers\PostsApiController;
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

Route::get('/posts', [PostsApiController::class, 'index']);

Route::get('/posts/{id}' ,[PostsApiController::class, 'show']);
   
Route::post('/posts', [PostsApiController::class, 'store']);

Route::patch('/posts/{post}', [PostsApiController::class, 'update']);

Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);

