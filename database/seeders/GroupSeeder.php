<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Beverages',
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
        ]);

        DB::table('groups')->insert([
            'name' => 'Donuts',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
        ]);
    }
}
