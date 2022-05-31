<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                [
                    'store_id' => 1,
                    'product_category_id' => 1,
                    'name' => 'Nike',
                    'price' => 1000000,
                    'stock' => 10,
                    'image' => 'nike-air-hurache.webp',
                    'description' => 'Nike Limited',
                ],
                [
                    'store_id' => 1,
                    'product_category_id' => 2,
                    'name' => 'Adidas',
                    'price' => 1500000,
                    'stock' => 12,
                    'image' => 'adidas.jpg',
                    'description' => 'Adidas Limited',
                ],
            ]
        );
    }
}
