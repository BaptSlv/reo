<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // team_id 10 = user_id 20
        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '1',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '2',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '3',
        ]);

        // team_id 3 will be associate to "guest" role for user_id 20
        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '4',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '5',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '6',
        ]);

        // team_id 5 will be associate to "editor" role for user_id 20
        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '7',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '8',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '9',
        ]);

        // team_id 7 will be associate to "administrator" role for user_id 20
        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '10',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '11',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '12',
        ]);

        DB::table('property_team')->insert([
            'team_id' => '10',
            'property_id' => '13',
        ]);
    }
}
