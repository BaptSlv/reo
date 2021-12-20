<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'notaire',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'copropriété',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'agence',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'travaux',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'coucou',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'trololo',
        ]);

        DB::table('costs')->insert([
            'team_id' => 10,
            'type' => 'tralala',
        ]);
    }
}
