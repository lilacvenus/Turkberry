<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Ashton',
            'last_name' => 'Burgess',
            'profile_picture' => 'resources/turkberry-assets/staff/7.jpg',
            'store' => 'main',
            'email' => 'punkassbitch@1996.com',
            'password' => Hash::make('inet2005'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Patrick',
            'last_name' => 'Creamer',
            'profile_picture' => 'resources/turkberry-assets/staff/8.jpg',
            'store' => 'main',
            'email' => 'webmaster@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Nilan',
            'last_name' => 'Ekanayake',
            'profile_picture' => 'resources/turkberry-assets/staff/8.jpg',
            'store' => 'main',
            'email' => 'totallylegitguy@godaddy.com',
            'password' => Hash::make('inet2005'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Marvelous',
            'last_name' => 'Onyekwere',
            'profile_picture' => 'resources/turkberry-assets/staff/7.jpg',
            'store' => 'main',
            'email' => 'a@b.c',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Samuel',
            'last_name' => 'Cowie',
            'profile_picture' => 'resources/turkberry-assets/staff/1.jpg',
            'store' => 'main',
            'email' => 'xG@turk.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Ryan',
            'last_name' => 'Isnor',
            'profile_picture' => 'resources/turkberry-assets/staff/3.jpg',
            'store' => 'main',
            'email' => 'Ryan@test.com',
            'password' => Hash::make('password'),
        ]);
    }
}
