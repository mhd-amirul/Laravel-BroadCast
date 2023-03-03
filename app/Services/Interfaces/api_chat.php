<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface api_chat {
    public function get_recent_chat($email);
    public function get_chat_user_auth($email, $ord = "ASC");
    public function get_chat_user_auth_with_partner($friendChat);
    // public function load_last_messages(Collection $chat);
}
