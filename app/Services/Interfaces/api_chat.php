<?php

namespace App\Services\Interfaces;

interface api_chat {
    public function get_recent_chat($email);
    public function get_chat_user_auth($email, $ord = "ASC");
}
