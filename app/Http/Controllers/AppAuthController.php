<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\auth\signInRequest;
use App\Http\Requests\auth\signUpRequest;
use App\Services\Interfaces\api_auth;
use Illuminate\Http\Request;

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

    public function sign_in(signInRequest $request)
    {

        $sigin = $this->api_auth->sign_in($request->all());

        return ($sigin["code"]) == 400 || ($sigin["code"]) == 404
            ? ResponseFormatter::error(null, $sigin["message"], $sigin["code"])
            : ResponseFormatter::success($sigin["token"], $sigin["message"]);
    }

    public function sign_out(Request $request)
    {
        $this->api_auth->sign_out($request->user());

        return ResponseFormatter::success(null, "Sign Out Success!");
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
