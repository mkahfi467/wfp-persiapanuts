<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 3; $i++) {
            DB::table('suppliers')->insert([
                'name' => Str::random(10),
                'address' => Str::random(20),
            ]);
        }
    }
}
