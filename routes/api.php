<?php

use App\Http\Controllers\AppAuthController;
use App\Http\Controllers\AppChatController;
use App\Http\Controllers\AppMessageController;
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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('sign-out', [AppAuthController::class, "sign_out"]);

    Route::get('load-msg', [AppMessageController::class, "load_message"]);
    Route::post('create-msg', [AppMessageController::class, "created_message"]);

    Route::get('recent-chat', [AppChatController::class, "get_recent_chat"]);
});

Route::post('chat-app', [AppChatController::class, "message"]);

Route::post('sign-up', [AppAuthController::class, "sign_up"]);
Route::post('sign-in', [AppAuthController::class, "sign_in"]);

