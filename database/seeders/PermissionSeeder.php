<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Collection;
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
            'read-dashboard',

            # Products related permission
            'read-products', 'create-products', 'update-products', 'delete-products',

            # Home related permission
            'read-home',

        ]);

        $this->insertPermission($webPermissions);
    }

    /**
     * insertPermission to "permissions" table
     *
     * Insert permission to database
     * @param Illuminate\Support\Collection (optional) (default = 'web') $permissions
     * @param string $guardName
     *
     * @return void
     */
    private function insertPermission(Collection $permissions, $guardName = 'web')
    {
        Permission::insert($permissions->map(function ($permission) use ($guardName) {
            return [
                'name' => $permission,
                'guard_name' => $guardName,
                'created_at' => Carbon::now(),
            ];
        })->toArray());
    }
}
