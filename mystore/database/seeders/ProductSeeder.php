<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('products')->truncate();
        
        // Menambahkan 3 data product
        for ($i = 0; $i < 3; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'price' => rand(10000,50000),
                'category_id' => 1,
                'supplier_id' => rand(1,3),
                'stock' => rand(0,100),
            ]);
        }

        // Update data pada column stock
        // for ($i = 2; $i < 5; $i++) {
        //     DB::table('products')
        //     ->where('id', $i)
        //     ->update(['stock'=>rand(0,100)]);
        // }
    }
}
