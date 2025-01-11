<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'School Bag',
            'description' => 'Durable school bag for kids.',
            'price' => 20.00,
            'image' => 'products/kid-bag.jpg',
            'category' => 'kids',
        ]);

        Product::create([
            'name' => 'Men’s Jacket',
            'description' => 'Stylish and warm jacket for men.',
            'price' => 120.00,
            'image' => 'products/mens-jacket.jpg',
            'category' => 'men',
        ]);

        Product::create([
            'name' => 'Women’s Dress',
            'description' => 'Elegant evening dress for women.',
            'price' => 85.00,
            'image' => 'products/womens-dress.jpg',
            'category' => 'women',
        ]);
    }
}
