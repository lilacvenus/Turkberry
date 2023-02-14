<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_descriptions')->insert([
            'name' => 'Donuts',
            'details' => 'Individual - $2.00',
        ]);

        DB::table('group_descriptions')->insert([
            'name' => 'Donuts',
            'details' => 'Half Dozen(6) - $10.00',
        ]);

        DB::table('group_descriptions')->insert([
            'name' => 'Donuts',
            'details' => 'Dozen(12) - $16.00',
        ]);

        DB::table('group_descriptions')->insert([
            'name' => 'Donuts',
            'details' => 'Office Hero - $36.00 \n(12 personalized donuts with a carafe of coffee)',
        ]);
    }
}
