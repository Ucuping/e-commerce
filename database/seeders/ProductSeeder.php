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
                    'brand_id' => 1,
                    'product_category_id' => 1,
                    'name' => 'Nike Air Hurache',
                    'price' => 1000000,
                    'stock' => 10,
                    'image' => 'nike-air-hurache.webp',
                    'description' => 'Nike Limited',
                ],
                [
                    'brand_id' => 2,
                    'product_category_id' => 2,
                    'name' => 'Adidas',
                    'price' => 1500000,
                    'stock' => 12,
                    'image' => 'adidas.jpg',
                    'description' => 'Adidas Limited',
                ],
                [
                    'brand_id' => 3,
                    'product_category_id' => 1,
                    'name' => 'Vans Ultrarange Exo',
                    'price' => 850000,
                    'stock' => 27,
                    'image' => 'vans-ultrange-exo.webp',
                    'description' => 'Always ready for the unexpected We believe that adventure begins when things go sideways, so we developed a shoe that would not only stand up to the journey, but keep you comfortable in the most uncomfortable of situations. Armed with a co-molded UltraCush midsole, updated RapidWeld detailing, a lightweight, die-cut rubber outsole, and a breathable Old Skool-inspired upper, this is the UltraRange—evolved. The UltraRange EXO is made with elevated textile and synthetic uppers. • FULL SUPPORT - EXO Skeleton provides built-in support across the toes and medial sidewall, with a heel lock for a secure fit. • ULTRACUSH® FOR COMFORT - The co-molded UltraCush® Lite midsole increases comfort, not weight. • ALL-TERRAIN GRIP - Full rubber-wrapped reverse waffle lug outsoles improve traction and flexibility. • INCREASED BREATHABILITY - An UltraCush® tongue with breathability ports offers superior airflow.',
                ],
            ]
        );
    }
}
