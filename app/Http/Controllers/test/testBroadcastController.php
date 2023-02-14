<?php

namespace App\Http\Controllers\test;

use App\Events\test\TestBroadcastMsg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testBroadcastController extends Controller
{
    public function broadcast_test_view()
    {
        return view("BroadcastTest.broadcast");
    }

    public function broadcast_test_event(Request $request)
    {
        $request->validate([ "name" => "required", "message" => "required", ]);

        $msg = [ "name" => $request->name, "message" => $request->message, ];

        event(new TestBroadcastMsg($msg));
    }
}
