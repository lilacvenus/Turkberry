<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Turks Head',
            'description' => '',
            'price' => 5.00,
            'image' => '',
            'availability' => true,
            'header' => 2,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Presidente',
            'description' => '',
            'price' => 6.00,
            'image' => '',
            'availability' => true,
            'header' => 2,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Coors Light',
            'description' => '',
            'price' => 6.00,
            'image' => '',
            'availability' => true,
            'header' => 2,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Heineken',
            'description' => '',
            'price' => 6.00,
            'image' => '',
            'availability' => true,
            'header' => 2,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Coca Cola',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Diet Coke',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Fanta',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Dr Pepper',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Nestle Water',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Brisk',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Perrier',
            'description' => '',
            'price' => 2.00,
            'image' => '',
            'availability' => true,
            'header' => 1,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'Red Wine',
            'description' => '',
            'price' => 8.00,
            'image' => '',
            'availability' => true,
            'header' => 3,
            'stock' => true,
            'created_by' => 6,
        ]);

        DB::table('products')->insert([
            'name' => 'White Wine',
            'description' => '',
            'price' => 8.00,
            'image' => '',
            'availability' => true,
            'header' => 3,
            'stock' => true,
            'created_by' => 6,
        ]);
    }
}
