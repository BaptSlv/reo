<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Team chat ID 1 = default team chat for user 20
        DB::table('chat_user')->insert([
            'chat_id' => 1,
            'user_id' => 20,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 1,
            'user_id' => 11,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 1,
            'user_id' => 12,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 1,
            'user_id' => 13,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 2,
            'user_id' => 20,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 2,
            'user_id' => 11,
            'isOwner' => 1,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 3,
            'user_id' => 20,
            'isOwner' => 1,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 3,
            'user_id' => 12,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 3,
            'user_id' => 13,
            'isOwner' => 0,
        ]);

        DB::table('chat_user')->insert([
            'chat_id' => 4,
            'user_id' => 20,
            'isOwner' => 0,
        ]);

        // Team chat ID 1 = default team chat for user 20
        DB::table('chat_user')->insert([
            'chat_id' => 5,
            'user_id' => 11,
            'isOwner' => 0,
        ]);
    }
}
