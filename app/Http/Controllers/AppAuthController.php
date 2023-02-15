<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\auth\signUpRequest;
use App\Models\User;
use App\Services\Interfaces\api_auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AppAuthController extends Controller
{
    protected $api_auth;

    public function __construct(api_auth $api_auth)
    {
        $this->api_auth = $api_auth;
    }

    public function sign_up(signUpRequest $request)
    {
        $user = $this->api_auth->sign_up($request->all());

        return ResponseFormatter::success($user, "sign up success!");
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

    public function sign_out(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json(["msg" => "Sign Out Success!"], 200);
    }

    public function email_verify()
    {
        # code...
    }

    public function forgot_password()
    {
        # code...
    }
}
