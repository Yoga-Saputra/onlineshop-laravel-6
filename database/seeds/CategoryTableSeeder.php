<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=5 ; $i++) { 
            DB::table('categories')->insert([
                'nama' => 'sony'. $i
            ]);
        }
    }
}
