<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'name' => 'The Simulator',
            'description' => 'The Simulator help you to determine if a new investment would be financially interesting. Easy to use but super efficient !',
            'namespace' => 'simulator',
            'icon' => 'fas fa-calculator',
        ]);

        DB::table('modules')->insert([
            'name' => 'The Organizer',
            'description' => 'The Organizer help you to list and organize your real estate park. Add, edit and delete your properties. Detail each of them with many additional information !',
            'namespace' => 'organizer',
            'icon' => 'fas fa-sitemap',
        ]);

        DB::table('modules')->insert([
            'name' => 'The Manager',
            'description' => 'The Manager help you to manage your own real estate park. You can configure each of your properties, calculate your rent performance and much more !',
            'namespace' => 'manager',
            'icon' => 'fas fa-cogs',
        ]);
    }
}
