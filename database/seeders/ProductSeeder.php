<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'amount' => 10.00,
        ]);
        DB::table('products')->insert([
            'name' => 'Product 2',
            'description' => 'Description 2',
            'amount' => 20.00,
        ]);
        DB::table('products')->insert([
            'name' => 'Product 3',
            'description' => 'Description 3',
            'amount' => 30.00,
        ]);
    }
}
