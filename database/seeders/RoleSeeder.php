<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seller = Role::create([
            'name' => 'Seller',
            'guard_name' => 'web'
        ]);

        $customer = Role::create([
            'name' => 'Customer',
            'guard_name' => 'web'
        ]);

        $seller->givePermissionTo([
            'read-dashboard',
            'read-products', 'create-products', 'update-products', 'delete-products',
            'read-orders', 'create-orders', 'update-orders', 'delete-orders',
            'read-users', 'create-users', 'update-users', 'delete-users',
            'read-brands', 'create-brands', 'update-brands', 'delete-brands',
        ]);

        $customer->givePermissionTo([
            'read-home'
        ]);
    }
}
