<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppAuthController extends Controller
{
    public function sign_up(Request $request)
    {
        $user = $request->all();

        $val = Validator::make($user, [
            "email" => "required|email|unique:users,email",
            "name" => "required",
            "password" => "required|confirmed",
            "password_confirmation" => "required"
        ]);

        if ($val->fails()) {
            return response()->json($val->errors(), 400);
        }

        $user["password"] = Hash::make($user["password"]);

        User::create($user);

        return response()->json("sign up success!", 200);
    }


}
