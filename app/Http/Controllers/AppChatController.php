<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Services\Interfaces\api_chat;
use Illuminate\Http\Request;

class AppChatController extends Controller
{

    protected $api_chat;

    public function __construct(api_chat $api_chat)
    {
        $this->api_chat = $api_chat;
    }

    public function find_users()
    {
        # code...
    }

    public function get_recent_chat()
    {
        return ResponseFormatter::success($this->api_chat->get_recent_chat(auth()->user()->email));
    }

    public function search_recent_chat(Request $request)
    {
        # code...
    }
}
