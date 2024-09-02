<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Red Dress',
            'description' => 'Beautiful red dress',
            'price' => 29.99,
            'image' => 'red-dress.jpg',
        ]);

        Product::create([
            'name' => 'Blue Jeans',
            'description' => 'Comfortable blue jeans',
            'price' => 49.99,
            'image' => 'blue-jeans.jpg',
        ]);
    }
}
