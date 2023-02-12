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

    public function sign_in(Request $request)
    {
        $val = Validator::make($request->all(), [
            "email" => "required",
            "password" => "required"
        ]);

        if ($val->fails()) {
            return response()->json($val->errors(), 400);
        }

        $user = User::where("email", $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {

                $token = $user->createToken("token")->plainTextToken;

                return response()->json(["msg" => "sign in success!", "token" => $token], 200);
            }

            return response()->json("email or password not compatible!", 400);
        }

        return response()->json("user not found!", 404);
    }

}
