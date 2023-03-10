<?php

use App\Http\Controllers\API\ChatController;
use App\Http\Controllers\API\FakultasController;
use App\Http\Controllers\API\JurusanController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\PostLikeController;
use App\Http\Controllers\API\PostSavedController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AuthController;
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

Route::name('api.')->group(function () {
    Route::resource('fakultas', FakultasController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::controller(AuthController::class)->group(function () {
        Route::get('me', 'me');
        Route::post('login', 'login');
        Route::post('register', 'register');
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
    });

    Route::controller(PostController::class)->group(function () {
        Route::get('posts', 'index');
        Route::post('posts', 'store');
        Route::get('posts/{post}', 'show');
        Route::put('posts/{post}', 'update');
        Route::delete('posts/{post}', 'destroy');
    });

    Route::controller(PostLikeController::class)->group(function () {
        Route::post('post-likes', 'store');
    });
    Route::controller(PostSavedController::class)->group(function () {
        Route::post('post-saveds', 'store');
    });
    Route::middleware('auth:api')->group(function () {
        Route::controller(ChatController::class)->group(function () {
            Route::get('chats', 'index');
            Route::get('chats/{id}', 'show');
            Route::post('chats', 'store');
        });
        Route::post('update-profile', [UserController::class, 'updateUserProfile'])->name('update-profile');
        Route::get('questions', [UserController::class, 'getQuestions'])->name('questions');
    });
});
