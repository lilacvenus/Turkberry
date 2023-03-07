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
            'created_by' => 6,
        ]);
        //2
        DB::table('headers')->insert([
            'name' => 'Beer',
            'group' => 1,
            'created_by' => 6,
        ]);
        //3
        DB::table('headers')->insert([
            'name' => 'Wine',
            'group' => 1,
            'created_by' => 6,
        ]);
        //4
        DB::table('headers')->insert([
            'name' => 'Frozen Yogurt',
            'group' => 2,
            'created_by' => 6,
        ]);
        //5
        DB::table('headers')->insert([
            'name' => 'Milkshake',
            'group' => 2,
            'created_by' => 6,
        ]);
        //6
        DB::table('headers')->insert([
            'name' => 'Hurricane',
            'group' => 2,
            'created_by' => 6,
        ]);
        //7
        DB::table('headers')->insert([
            'name' => 'Drizzle',
            'group' => 3,
            'created_by' => 6,
        ]);
        //8
        DB::table('headers')->insert([
            'name' => 'Topping',
            'group' => 3,
            'created_by' => 6,
        ]);
        //9
        DB::table('headers')->insert([
            'name' => 'Coating',
            'group' => 3,
            'created_by' => 6,
        ]);
        //10
        DB::table('headers')->insert([
            'name' => 'Brewed',
            'group' => 4,
            'created_by' => 6,
        ]);
        //11
        DB::table('headers')->insert([
            'name' => 'Latte',
            'group' => 4,
            'created_by' => 6,
        ]);
        //12
        DB::table('headers')->insert([
            'name' => 'Cappuccino',
            'group' => 4,
            'created_by' => 6,
        ]);
        //13
        DB::table('headers')->insert([
            'name' => 'Other',
            'group' => 4,
            'created_by' => 6,
        ]);
    }
}
