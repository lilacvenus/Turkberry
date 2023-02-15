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
            'header' => 4,
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
            'header' => 6,
            'details' => 'Small - $6.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 6,
            'details' => 'Large - $11.25',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 10,
            'details' => 'Small - $2.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 10,
            'details' => 'Medium - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 10,
            'details' => 'Large - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 10,
            'details' => 'Carafe - $20.00',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 10,
            'details' => 'Morning Miracle - $4.00 \n(Medium coffee + personalized donut)',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 11,
            'details' => 'Small - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 11,
            'details' => 'Medium - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 11,
            'details' => 'Large - $5.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 12,
            'details' => 'Small - $3.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 12,
            'details' => 'Medium - $4.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 12,
            'details' => 'Large - $5.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 13,
            'details' => 'Espresso - $2.50',
        ]);

        DB::table('header_descriptions')->insert([
            'header' => 13,
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
