<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'seller_id' => 1,
                'name' => 'Adidas',
                'description' => 'Adidas',
            ],
            [
                'seller_id' => 2,
                'name' => 'Nike',
                'description' => 'Nike',
            ],
            [
                'seller_id' => 3,
                'name' => 'Vans',
                'description' => null,
            ],
        ]);
    }
}
