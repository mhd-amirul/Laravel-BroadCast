<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "amirul",
            "email" => "amirul@mail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("password"),
        ]);

        User::create([
            "name" => "muhammad",
            "email" => "muhammad@mail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("password"),
        ]);

        User::create([
            "name" => "Syeikh",
            "email" => "Syeikh@mail.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("password"),
        ]);

        Chat::create([
            "user_id" => "amirul@mail.com_|_muhammad@mail.com",
        ]);

        Chat::create([
            "user_id" => "amirul@mail.com_|_Syeikh@mail.com",
        ]);

        Message::create([
            "message" => "hi",
            "chat_id" => 1,
            "sender_id" => "amirul@mail.com",
            "to_id" => "muhammad@mail.com",
        ]);

        Message::create([
            "message" => "hi too",
            "chat_id" => 1,
            "sender_id" => "muhammad@mail.com",
            "to_id" => "amirul@mail.com",
        ]);

        Message::create([
            "message" => "hi",
            "chat_id" => 2,
            "sender_id" => "amirul@mail.com",
            "to_id" => "Syeikh@mail.com",
        ]);

        Message::create([
            "message" => "hi too",
            "chat_id" => 2,
            "sender_id" => "Syeikh@mail.com",
            "to_id" => "amirul@mail.com",
        ]);
    }
}
