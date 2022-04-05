<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Team::factory(10)->create();
        $this->call([
            UserTeamSeeder::class,
            ModuleSeeder::class,
            ModuleTeamSeeder::class,
            PropertySeeder::class,
            PropertyTeamSeeder::class,
            CostSeeder::class,
            CostPropertySeeder::class,
            ChatSeeder::class,
            ChatUserSeeder::class,
            MessageSeeder::class
        ]);
    }
}
