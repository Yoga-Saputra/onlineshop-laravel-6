<?php

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
            'name'            => 'admin',
            'email'           => 'admin@gmail.com',
            'level'           => 'admin',
            'password'        => Hash::make("admin123")
        ]);

        DB::table('users')->insert([
            'name'            => 'yoga',
            'email'           => 'yoga@gmail.com',
            'level'           => 'member',
            'password'        => Hash::make("member123")
        ]);

        
    }
}
