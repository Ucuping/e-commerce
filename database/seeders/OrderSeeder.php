<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer_id' => 1,
            'name' => 'Nike Order',
            'payment_method' => 'transfer',
            'delivery_method' => 'non-cod',
            'order_date' => '2022-05-30',
            'pay' => 1000000,
        ]);
    }
}
