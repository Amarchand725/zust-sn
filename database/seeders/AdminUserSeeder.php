<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@123'),
        ]);

        $admin_role = Role::create([
                        'name'=>'Admin',
                        'guard_name'=>'web',
                        ]);

        $permissions = [
            'role-list', 'role-create', 'role-edit', 'role-delete',
            'permission-list', 'permission-create', 'permission-edit', 'permission-delete',
            'user-list', 'user-create', 'user-edit', 'user-delete',
            'logactivity-list', 'logactivity-create', 'logactivity-edit', 'logactivity-delete',
            'companyprofile-list', 'companyprofile-create', 'companyprofile-edit', 'companyprofile-delete',
            'setting-list', 'setting-create', 'setting-edit', 'setting-delete',
        ];
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
        $permissions = Permission::get();
        $admin_role->givePermissionTo($permissions);
        $admin->assignRole($admin_role);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@123'),
        ]);

        $user_role = Role::create([
                        'name'=>'User',
                        'guard_name'=>'web',
                        ]);

        $permissions = ['user-create', 'user-edit'];
        $permissions = Permission::whereIn('name', $permissions)->get();
        $user_role->givePermissionTo($permissions);
        $user->assignRole($user_role);
    }
}
