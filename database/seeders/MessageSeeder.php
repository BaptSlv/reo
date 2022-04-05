<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'chat_id' => 1,
            'user_id' => 20,
            'message' => 'Hello guys',
            'created_at' => now()
        ]);

        DB::table('messages')->insert([
            'chat_id' => 1,
            'user_id' => 10,
            'message' => 'What’s up',
            'created_at' => now()->subDays(1)
        ]);

        DB::table('messages')->insert([
            'chat_id' => 1,
            'user_id' => 5,
            'message' => 'Coucou',
            'created_at' => now()->subDays(2)
        ]);

        DB::table('messages')->insert([
            'chat_id' => 1,
            'user_id' => 1,
            'message' => 'Good Morning',
            'created_at' => now()->subDays(3)
        ]);

        DB::table('messages')->insert([
            'chat_id' => 2,
            'user_id' => 10,
            'message' => 'Je suis le roi du monde',
            'created_at' => now()->subDays(4)
        ]);

        DB::table('messages')->insert([
            'chat_id' => 2,
            'user_id' => 20,
            'message' => 'Mais bien sur',
            'created_at' => now()
        ]);
    }
}
