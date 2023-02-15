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
        //1
        DB::table('headers')->insert([
            'name' => 'Soft Drinks',
            'group' => 1,
        ]);
        //2
        DB::table('headers')->insert([
            'name' => 'Beer',
            'group' => 1,
        ]);
        //3
        DB::table('headers')->insert([
            'name' => 'Wine',
            'group' => 1,
        ]);
        //4
        DB::table('headers')->insert([
            'name' => 'Frozen Yogurt',
            'group' => 2,
        ]);
        //5
        DB::table('headers')->insert([
            'name' => 'Milkshake',
            'group' => 2,
        ]);
        //6
        DB::table('headers')->insert([
            'name' => 'Hurricane',
            'group' => 2,
        ]);
        //7
        DB::table('headers')->insert([
            'name' => 'Drizzle',
            'group' => 3,
        ]);
        //8
        DB::table('headers')->insert([
            'name' => 'Topping',
            'group' => 3,
        ]);
        //9
        DB::table('headers')->insert([
            'name' => 'Coating',
            'group' => 3,
        ]);
        //10
        DB::table('headers')->insert([
            'name' => 'Brewed',
            'group' => 4,
        ]);
        //11
        DB::table('headers')->insert([
            'name' => 'Latte',
            'group' => 4,
        ]);
        //12
        DB::table('headers')->insert([
            'name' => 'Cappuccino',
            'group' => 4,
        ]);
        //13
        DB::table('headers')->insert([
            'name' => 'Other',
            'group' => 4,
        ]);
    }
}
