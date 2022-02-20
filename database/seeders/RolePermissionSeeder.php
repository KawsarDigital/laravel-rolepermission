<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles

        $Superadminrole = Role::create(['name' => 'superadmin']);
        $Adminrole = Role::create(['name' => 'admin']);
        $Editorrole = Role::create(['name' => 'editor']);
        $Userrole = Role::create(['name' => 'user']);

        //Permission List as Array
        $permissions = [
            //Dashboard
            'dashboard.view',

            //Blog permission
            'create.blog',
            'view.blog',
            'edit.blog',
            'delete.blog',
            'approve.blog',

            //admin permission
            'create.admin',
            'view.admin',
            'edit.admin',
            'delete.admin',
            'approve.admin',

            //Role permission
            'create.role',
            'view.role',
            'edit.role',
            'delete.role',
            'approve.role',

            //Profile permission
            'view.profile',
            'edit.profile',

        ];

        //Create and Assign Permission
        for ($i = 0; $i < count($permissions); $i++) {
            //create permission
            $permission = Permission::create(['name' => $permissions[$i]]);
            $Superadminrole ->givePermissionTo($permission);
            $permission->assignRole($Superadminrole );
        }
    }
}
