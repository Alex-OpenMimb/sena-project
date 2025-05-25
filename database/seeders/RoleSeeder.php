<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }


    private function create_roles()
    {
        $ROLES = [
            'Admin',
            'Auxiliar',
            'Auditor',
        ];
        foreach ($ROLES as $index => $role){
            Role::create(['name'=>$role]);
        }

    }



    private function create_permissions()
    {
        $PERMISSIONS = [
            'admin.users',

        ];

        foreach ($PERMISSIONS as $index => $permission){
            Permission::create(['name'=> $permission]);
        }
    }
}
