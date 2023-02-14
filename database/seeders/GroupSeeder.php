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
            'header' => 'Soft Drink',
        ]);

        DB::table('groups')->insert([
            'name' => 'Beverages',
            'header' => 'Beer',
        ]);

        DB::table('groups')->insert([
            'name' => 'Beverages',
            'header' => 'Wine',
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
            'header' => 'Frozen Yogurt',
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
            'header' => 'Topping',
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
            'header' => 'Milkshake',
        ]);

        DB::table('groups')->insert([
            'name' => 'Frozen Treats',
            'header' => 'Hurricane',
        ]);

        DB::table('groups')->insert([
            'name' => 'Donuts',
            'header' => 'Coating',
        ]);

        DB::table('groups')->insert([
            'name' => 'Donuts',
            'header' => 'Topping',
        ]);

        DB::table('groups')->insert([
            'name' => 'Donuts',
            'header' => 'Drizzle',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Coffee - Brewed',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Coffee - Latte',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Coffee - Cappuccino',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Coffee - Americano',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Coffee - Other',
        ]);

        DB::table('groups')->insert([
            'name' => 'Hot Drinks',
            'header' => 'Tea',
        ]);
    }
}
