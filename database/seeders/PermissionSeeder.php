<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Traits\PermissionGroups;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    use PermissionGroups;
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = collect();

        $permissions =  $permissions->merge($this->globalPermissions());

        foreach ($permissions as $key => $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }
    }
}
