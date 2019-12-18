<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Int_;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10 ; $i++) { 
            DB::table('products')->insert([
                'category_id'    => rand(1,5),
                'gambar'     =>  $i.'.jpg',
                'name'        => 'baju '.$i,
                'qty'       => 10,
                'keterangan'  => 'baru'.$i,
                'harga'       => '10000'.$i,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s')
            ]);
        }
    }
}

