<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // team_id 10 = user_id 20
        DB::table('module_team')->insert([
            'team_id' => '10',
            'module_id' => '1',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '10',
            'module_id' => '2',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '10',
            'module_id' => '3',
        ]);

        // team_id 3 will be associate to "guest" role for user_id 20
        DB::table('module_team')->insert([
            'team_id' => '3',
            'module_id' => '1',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '3',
            'module_id' => '2',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '3',
            'module_id' => '3',
        ]);

        // team_id 5 will be associate to "editor" role for user_id 20
        DB::table('module_team')->insert([
            'team_id' => '5',
            'module_id' => '1',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '5',
            'module_id' => '2',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '5',
            'module_id' => '3',
        ]);

        // team_id 7 will be associate to "administrator" role for user_id 20
        DB::table('module_team')->insert([
            'team_id' => '7',
            'module_id' => '1',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '7',
            'module_id' => '2',
        ]);

        DB::table('module_team')->insert([
            'team_id' => '7',
            'module_id' => '3',
        ]);
    }
}
