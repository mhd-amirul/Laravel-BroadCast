<?php

namespace App\Http\Controllers;

use App\Events\AppSendMessagesEvent;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class AppMessageController extends Controller
{
    public function message(Request $request)
    {
        event(new AppSendMessagesEvent($request->msg, $request->sender));

        return [];
    }

    public function load_message(Request $request)
    {

        $user_id = $request->ids;

        $chat = Chat::whereJsonContains("user_id->member", $user_id)->first();

        $messages = $chat->messages
        ->map( function ($msg) use ($user_id) {
            $messages = [];
            $msg->sender_id == $user_id[0] && $msg->to_id == $user_id[1] ? $messages = $msg : null;
            $msg->sender_id == $user_id[1] && $msg->to_id == $user_id[0] ? $messages = $msg : null;
            return $messages;
        })
        ->filter(function ($msg) { return !empty($msg); })
        ->sort(function ($a, $b) { return $a["created_at"] <=> $b["created_at"]; });

        return response()->json($messages);
    }

    public function created_message(Request $request)
    {
        // $user = Auth()->user();

        $to = User::where("name", $request->nameOrEmail)
            ->orWhere("email", $request->nameOrEmail)
            ->select("id")
            ->first();

        $chat = Chat::whereJsonContains("user_id", json_encode(["amirul@mail.com"]  ))->first();

        $msg = [
            "chat_id" => 1,
            // "sender_id" => $user->id,
            "to_id" => $to
        ];


        return response()->json($chat);
    }

    public function get_message()
    {
        # code...
    }

    public function delete_message()
    {
        # code...
    }
}
