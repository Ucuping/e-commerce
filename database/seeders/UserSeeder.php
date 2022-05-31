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
        User::insert(
            [
                [
                    'name' => 'root',
                    'username' => 'root',
                    'email' => 'root@mail.com',
                    'password' => Hash::make('root'),
                    'type' => 'seller'
                ],
                [
                    'name' => 'andi',
                    'username' => 'andi',
                    'email' => 'andi@mail.com',
                    'password' => Hash::make('1234'),
                    'type' => 'customer'
                ],
            ]
        );
    }
}
