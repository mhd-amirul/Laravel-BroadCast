<?php

namespace App\Services\Interfaces;

interface api_auth {

    public function sign_up(array $user);
    public function sign_in(array $user);
    public function sign_out($user);
}
