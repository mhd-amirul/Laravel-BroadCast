<?php

namespace App\Http\Controllers;

use App\Events\AppSendMessagesEvent;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
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

        $chat = Chat::where("user_id", auth()->user()->email."_|_".$request->friendChat)->first();

        $user_id = explode("_|_", $chat->user_id);

        $messages = $chat->messages->map( function ($msg) use ($user_id) {
            $messages = [];
            $msg->sender_id == $user_id[0] && $msg->to_id == $user_id[1] ? $messages = $msg : null;
            $msg->sender_id == $user_id[1] && $msg->to_id == $user_id[0] ? $messages = $msg : null;
            return $messages;
        })
        ->filter(function ($msg) { return !empty($msg); })
        ->sort(function ($a, $b) { return $a["created_at"] <=> $b["created_at"]; });

        return response()->json(array_values($messages->toArray()));
    }

    public function created_message(Request $request)
    {
        $request->validate([
            "friendChat" => "required|email",
            "msg" => "required",
        ]);

        $to = User::where("email", $request->friendChat)->exists();

        if( $to == false ) return "err";

        $chat = Chat::where("user_id", auth()->user()->email."_|_".$request->friendChat)->select("id")->first();

        $msg = [
            "chat_id" => $chat->id,
            "message" => $request->msg,
            "sender_id" => auth()->user()->email,
            "to_id" => $request->friendChat
        ];

        $msg = Message::create($msg);
        $chat->update(["updated_at" => Carbon::now()]);

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
