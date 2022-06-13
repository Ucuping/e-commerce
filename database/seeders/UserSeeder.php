<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'customer_id' => null,
                'seller_id' => 1,
                'username' => 'riris',
                'email' => 'riris@mail.com',
                'password' => Hash::make('1234'),
            ],
        )->assignRole('Seller');

        User::create(
            [
                'customer_id' => 1,
                'seller_id' => null,
                'username' => 'andi',
                'email' => 'andi@mail.com',
                'password' => Hash::make('1234'),
            ]
        )->assignRole('Customer');
    }
}
