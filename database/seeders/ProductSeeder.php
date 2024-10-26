<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    
    public function run()
    {
        Product::create([
            'name' => 'Orange',
            'description' => 'Description for product 1',
            'price' => 9.99,
        ]);

        Product::create([
            'name' => 'Banana',
            'description' => 'Description for product 2',
            'price' => 19.99,
        ]);
        Product::create([
            'name' => 'Bread',
            'description' => 'Description for product 2',
            'price' => 19.99,
        ]);
    }
}
