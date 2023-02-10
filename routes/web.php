<?php

use App\Events\AppSendMessagesEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});

Route::get('message', function () {

    AppSendMessagesEvent::dispatch("New Messages");

});

Route::get('/v1/chat-app', function () {
    return view("v1.core.core");
});

Route::get('/v2/chat-app', function () {
    return view("v2.core.core");
});
