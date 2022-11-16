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

        $permissions = ['role-index', 'role-create', 'role-edit', 'role-delete', 'permission-index', 'permission-create', 'permission-edit', 'permission-delete'];
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }
        $permissions = Permission::get();
        $admin_role->givePermissionTo($permissions);
        $admin->assignRole($admin_role);
    }
}
