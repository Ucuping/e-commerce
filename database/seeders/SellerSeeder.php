<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::insert([
            [
                'name' => 'Riris',
                'email' => 'riris@mail.com',
                'address' => 'Srono',
                'phone' => '081277675471'
            ],
            [
                'name' => 'Depi',
                'email' => 'depi@mail.com',
                'address' => 'Banyuwangi',
                'phone' => '08127776876'
            ],
            [
                'name' => 'Chindi',
                'email' => 'chindi@mail.com',
                'address' => 'Licin',
                'phone' => '081265785654'
            ],
        ]);
    }
}
