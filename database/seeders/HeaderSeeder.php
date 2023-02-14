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
            'type' => 'Soft Drinks',
        ]);

        DB::table('headers')->insert([
            'type' => 'Beer',
        ]);

        DB::table('headers')->insert([
            'type' => 'Wine',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
        ]);

        DB::table('headers')->insert([
            'type' => 'Milkshake',
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
