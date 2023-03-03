<?php

namespace App\Services;

use App\Models\Chat;
use App\Services\Interfaces\api_chat as InterfacesApi_chat;
use Illuminate\Database\Eloquent\Collection;

class api_chat implements InterfacesApi_chat {

    public function get_chat_user_auth($email, $ord = "ASC")
    {
        return Chat::where("user_id", "LIKE", "%" . $email . "%")->orderBy("updated_at", $ord)->get();
    }

    public function get_chat_user_auth_with_partner($friendChat)
    {
        return Chat::where("user_id", auth()->user()->email."_|_".$friendChat)->first();
    }

    public function get_recent_chat($email)
    {
        // get chat
        $chat = $this->get_chat_user_auth($email, "DESC");
        $chat = $this->load_last_messages($chat);

        return $chat;
    }

    public function load_last_messages(Collection $chat)
    {
        $chat->map(function ($chat) {
            $msg = $chat->messages->sort(function ($a, $b) { return $b["created_at"] <=> $a["created_at"]; })->take(1);
            $chat->message = array_values($msg->toArray());
            unset($chat->messages);
        });

        return $chat;
    }
}
