<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear permisos
        $permissions = [
            'access-admin',
            'edit-posts',
            'delete-posts'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Crear rol Admin y asignarle permisos
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions($permissions);

        // Asignar el rol Admin a un usuario existente
        $user = \App\Models\User::find(1); // Cambia el ID según tu usuario
        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
