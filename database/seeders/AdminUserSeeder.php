<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder {
    public function run()
    {
       // Crear el rol 'admin' si no existe
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Crear el usuario admin
        $user = User::create([
            'name' => 'Admin',
            'email' => 'eddylujann@gmail.com',
            'password' => bcrypt('secret'), // Cambia por una contraseña segura
        ]);

        // Asignar el rol 'admin' al usuario
        $user->assignRole($role);
    }
}

