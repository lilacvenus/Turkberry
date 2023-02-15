<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_descriptions')->insert([
            'header' => 4,
            'details' => 'Mini - $4.00',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Frozen Yogurt',
            'details' => 'Small - $5.00',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 4,
            'details' => 'Medium - $6.00',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 4,
            'details' => 'Large - $9.00',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 4,
            'details' => 'Cone - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 4,
            'details' => 'Pint - $10.00',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 5,
            'details' => 'Regular - $12.00',
            'image' => 'resources/turkberry-assets/Milkshakes/milkshakes.png',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Hurricane',
            'details' => 'Small - $6.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Hurricane',
            'details' => 'Large - $11.25',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Brewed',
            'details' => 'Small - $2.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Brewed',
            'details' => 'Medium - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Brewed',
            'details' => 'Large - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Brewed',
            'details' => 'Carafe - $20.00',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Brewed',
            'details' => 'Morning Miracle - $4.00 \n(Medium coffee + personalized donut)',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Latte',
            'details' => 'Small - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Latte',
            'details' => 'Medium - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Latte',
            'details' => 'Large - $5.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Cappuccino',
            'details' => 'Small - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Cappuccino',
            'details' => 'Medium - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Cappuccino',
            'details' => 'Large - $5.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Other',
            'details' => 'Espresso - $2.50',
        ]);

        DB::table('header_descriptions')->insert([
            'type' => 'Other',
            'details' => 'Additional Espresso Shot - $1.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 13,
            'details' => 'Soy / Almond Milk - $0.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 13,
            'details' => 'Flavor Shots - $0.50',
        ]);
    }
}
