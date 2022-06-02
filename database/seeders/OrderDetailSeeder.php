<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([
            'product_id' => 1,
            'order_id' => 1,
            'amount' => 1000000,
            'quantity' => 1,
            'subtotal' => 1000000
        ]);
    }
}
