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
        if( !Role::count() ){
            $this->create_roles();
            $this->create_permissions();
            $roles = $this->extract_roles();
            $this->assign_high_permissions($roles);
            $this->assign_medium_permissions( $roles);
            $this->assign_uditor_permissions( $roles);
        }
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
            'admin.user.index',

        ];

        foreach ($PERMISSIONS as $index => $permission){
            Permission::create(['name'=> $permission]);
        }
    }


    private function extract_roles()
    {
        $admin = Role::where('name','Admin')->get();
        $aux = Role::where('name','Auxiliar')->get();
        $auditor = Role::where('name','Auditor')->get();

        return [
            'admin'=> $admin,
            'aux'=> $aux,
            'auditor'=> $auditor,
        ];
    }


    private function assign_high_permissions( $roles)
    {
        $admin      = $roles['admin'];
        $aux        = $roles['aux'];
        $auditor    =  $roles['auditor'];
        $high_permissions = Permission::all();
        foreach ( $high_permissions AS $index => $permission ){
            $permission->syncRoles([$admin,$aux, $auditor]);
        }

    }

    private function assign_medium_permissions( $roles )
    {
        $medium_permissions = [
            'admin.user.index',

        ];
        $permissions = Permission::whereIn('name',$medium_permissions)->get();

        foreach ( $permissions AS $index => $permission ){
            $permission->assignRole($roles['aux']);
        }

    }

    private function assign_uditor_permissions( $roles )
    {
        $medium_permissions = [
            'admin.user.index',

        ];
        $permissions = Permission::whereIn('name',$medium_permissions)->get();

        foreach ( $permissions AS $index => $permission ){
            $permission->assignRole($roles['auditor']);
        }

    }



}
