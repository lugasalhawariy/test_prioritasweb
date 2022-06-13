<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// mengambil semua data user beserta relasinya


Route::get('/users', [UserController::class, 'all']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/posts', [PostController::class, 'all']);
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/tags', [TagController::class, 'all']);
Route::get('/tag/{id}', [TagController::class, 'show']);