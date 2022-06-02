<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::insert(
            [
                [
                    'name' => 'Sports',
                    'description' => 'Sports Shoes'
                ],
                [
                    'name' => 'Canvas',
                    'description' => 'Canvas Shoes'
                ],
                [
                    'name' => 'Warrior',
                    'description' => 'Warrior Shoes'
                ],
            ]
        );
    }
}
