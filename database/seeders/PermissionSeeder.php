<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webPermissions = collect([
            # Dashboard related permission
            ['name' => 'read-dashboard'],

            # Product related permission
            ['name' => 'read-product'],

            # Home related permission
            ['name' => 'read-home'],

        ]);

        $this->insertPermission($webPermissions);
    }

    private function insertPermission(Collection $permissions, $guardName = 'web')
    {
        Permission::insert($permissions->map(function ($permission) use ($guardName) {
            return [
                'name' => $permission['name'],
                'guard_name' => $guardName,
                'created_at' => Carbon::now()
            ];
        })->toArray());
    }
}
