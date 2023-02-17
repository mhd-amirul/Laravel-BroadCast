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

    public function get_recent_chat()
    {
        // get chat
        $chat = Chat::where("user_id", "LIKE", "%" . auth()->user()->email . "%")->orderBy("updated_at", "desc")->get();

        // get last message
        $chat->map(function ($chat) {
            $msg = $chat->messages->sort(function ($a, $b) { return $b["created_at"] <=> $a["created_at"]; })->take(1);
            $chat->message = array_values($msg->toArray());
            unset($chat->messages);
        });

        return response()->json($chat);
    }

    public function search_recent_chat(Request $request)
    {
        # code...
    }
}
