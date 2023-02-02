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
            'details' => null,
        ]);

        DB::table('headers')->insert([
            'type' => 'Beer',
            'details' => null,
        ]);

        DB::table('headers')->insert([
            'type' => 'Wine',
            'details' => null,
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Mini - $4.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Small - $5.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Medium - $6.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Large - $9.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Cone - $4.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Pint - $10.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Milkshake',
            'details' => 'Regular - $12.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Hurricane',
            'details' => 'Small - $6.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Hurricane',
            'details' => 'Large - $11.25',
        ]);

        DB::table('headers')->insert([
            'type' => 'Make Your Own',
            'details' => 'Individual - $2.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Make Your Own',
            'details' => 'Half Dozen(6) - $10.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Make Your Own',
            'details' => 'Dozen(12) - $16.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Make Your Own',
            'details' => 'Office Hero - $36.00 \n(12 personalized donuts with a carafe of coffee)',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Brewed',
            'details' => 'Small - $2.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Brewed',
            'details' => 'Medium - $3.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Brewed',
            'details' => 'Large - $4.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Brewed',
            'details' => 'Carafe - $20.00',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Brewed',
            'details' => 'Morning Miracle - $4.00 \n(Medium coffee + personalized donut)',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Latte',
            'details' => 'Small - $3.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Latte',
            'details' => 'Medium - $4.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Latte',
            'details' => 'Large - $5.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Cappuccino',
            'details' => 'Small - $3.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Cappuccino',
            'details' => 'Medium - $4.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Cappuccino',
            'details' => 'Large - $5.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Other',
            'details' => 'Espresso - $2.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Other',
            'details' => 'Additional Espresso Shot - $1.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Other',
            'details' => 'Soy / Almond Milk - $0.50',
        ]);

        DB::table('headers')->insert([
            'type' => 'Coffee - Other',
            'details' => 'Flavor Shots - $0.50',
        ]);
    }
}
