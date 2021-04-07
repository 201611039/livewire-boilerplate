<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Traits\PermissionGroups;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    use PermissionGroups;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'super-admin', 'admin'
        ];

        foreach ($roles as $key => $role) {
            $role = Role::firstOrCreate([
                'name' => $role
            ]);

            $role->givePermissionTo($this->globalPermissions());
        }
    }
}
