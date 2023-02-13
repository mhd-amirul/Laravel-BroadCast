<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;

class AppChatController extends Controller
{
    public function find_users()
    {
        # code...
    }

    public function get_recent_chat($user_id = 1)
    {
        $chat = Chat::whereJsonContains("user_id", $user_id)->orderBy("updated_at", "desc")->get();

        // $messages = $chat->map(function ($chat) {
        //     return $chat->messages;
        // });

        return response()->json($chat);
    }

    public function search_recent_chat(Request $request)
    {
        # code...
    }
}
