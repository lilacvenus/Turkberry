<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            'name' => 'Soft Drinks',
            'group' => 1,
        ]);

        DB::table('headers')->insert([
            'name' => 'Beer',
            'group' => 1,
        ]);

        DB::table('headers')->insert([
            'name' => 'Wine',
            'group' => 1,
        ]);

        DB::table('headers')->insert([
            'name' => 'Frozen Yogurt',
            'group' => 2,
        ]);

        DB::table('headers')->insert([
            'name' => 'Milkshake',
            'group' => 2,
        ]);

        DB::table('headers')->insert([
            'type' => 'Hurricane',
        ]);

        DB::table('headers')->insert([
            'type' => 'Drizzle',
        ]);

        DB::table('headers')->insert([
            'type' => 'Topping',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coating',
        ]);

        DB::table('headers')->insert([
            'type' => 'Brewed',
        ]);

        DB::table('headers')->insert([
            'type' => 'Latte',
        ]);

        DB::table('headers')->insert([
            'type' => 'Cappuccino',
        ]);

        DB::table('headers')->insert([
            'type' => 'Other',
        ]);
    }
}
