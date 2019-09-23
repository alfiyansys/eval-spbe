<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin_permissions = Permission::all();
        Role::query()->findOrFail(1)->permissions()->sync($superadmin_permissions->pluck('id'));
        $admin_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::query()->findOrFail(2)->permissions()->sync($admin_permissions);
    }
}
