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
            'created_by' => 6,
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
            'created_by' => 6,
        ]);

        DB::table('groups')->insert([
            'name' => 'Donuts',
            'created_by' => 6,
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'created_by' => 6,
        ]);
    }
}
