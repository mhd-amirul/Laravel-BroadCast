<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\api_auth as InterfacesApi_auth;
use Illuminate\Support\Facades\Hash;

class api_auth implements InterfacesApi_auth {

    public function sign_up(array $user)
    {
        try {

            $user["password"] = Hash::make($user["password"]);

            $user = User::create($user);

            return $user->makeHidden("id");

        } catch (\Throwable $e) {

            throw $e;

        }
    }

    public function sign_in(array $user)
    {
        $user_db = User::where("email", $user["email"])->first();

        if ($user_db) {
            if (Hash::check($user["password"], $user_db->password)) {

                $token = $user_db->createToken("token")->plainTextToken;

                return ["message" => "sign in success!", "token" => $token, "code" => 200];
            }

            return ["message" => "email or password not compatible!", "code" => 400];
        }

        return ["message" => "user not found!", "code" => 404];
    }
}
