<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cost_property')->insert([
            'cost_id' => 1,
            'property_id' => 1,
            'name' => 'Frais de notaire',
            'amount' => 19000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 2,
            'property_id' => 1,
            'name' => 'RCP',
            'amount' => 783.44,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' =>3 ,
            'property_id' => 1,
            'name' => 'Honoraires',
            'amount' => 15000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 4,
            'property_id' => 1,
            'name' => 'Travaux rénovation',
            'amount' => 45000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 1,
            'property_id' => 2,
            'name' => 'Frais de notaire',
            'amount' => 19000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 2,
            'property_id' => 2,
            'name' => 'RCP',
            'amount' => 783.44,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' =>3 ,
            'property_id' => 2,
            'name' => 'Honoraires',
            'amount' => 15000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 1,
            'property_id' => 3,
            'name' => 'Frais de notaire',
            'amount' => 19000,
        ]);

        DB::table('cost_property')->insert([
            'cost_id' => 2,
            'property_id' => 3,
            'name' => 'RCP',
            'amount' => 783.44,
        ]);
    }
}
