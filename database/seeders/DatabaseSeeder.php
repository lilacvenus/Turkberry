<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            StoreSeeder::class,
            ProductSeeder::class,
            VarietySeeder::class,
            HeaderSeeder::class,
            GroupSeeder::class,
            GroupDescriptionSeeder::class,
            HeaderDescriptionSeeder::class,
        ]);
    }
}
