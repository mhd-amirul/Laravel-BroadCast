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
}
