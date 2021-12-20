<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_user')->insert([
            'team_id' => '3',
            'user_id' => '20',
            'role' => 'guest'
        ]);

        DB::table('team_user')->insert([
            'team_id' => '5',
            'user_id' => '20',
            'role' => 'editor'
        ]);

        DB::table('team_user')->insert([
            'team_id' => '7',
            'user_id' => '20',
            'role' => 'admin'
        ]);
    }
}
