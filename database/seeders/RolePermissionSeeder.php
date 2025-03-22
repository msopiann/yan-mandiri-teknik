<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage hero sections',
            'manage statistics',
            'manage abouts',
            'manage services',
            'manage settings'
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        $superAdminRole = Role::findOrCreate('super_admin');

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $suh = User::create([
            'name' => 'Suhendra',
            'email' => 'suhendra@yanmandiriteknik.com',
            'password' => bcrypt('123suhendra')
        ]);

        $user->assignRole($superAdminRole);
        $suh->assignRole($superAdminRole);
    }
}