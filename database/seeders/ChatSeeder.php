<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default team chat for user 20
        DB::table('chats')->insert([
            'team_id' => 10,
            'name' => 'Team',
        ]);

        DB::table('chats')->insert([
            'team_id' => 10,
            'name' => 'Boulot',
        ]);

        DB::table('chats')->insert([
            'team_id' => 10,
            'name' => 'Chill',
        ]);

        DB::table('chats')->insert([
            'team_id' => 2,
            'name' => 'Relax',
        ]);

        // Default team chat for user 11
        DB::table('chats')->insert([
            'team_id' => 1,
            'name' => 'Team',
        ]);
    }
}
