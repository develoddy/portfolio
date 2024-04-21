<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // php artisan db:seed --class=MenusTableSeeder


        // Llama al seeder MenusTableSeeder  
        $this->call(MenusTableSeeder::class);

        // Llama al seeder MenuItemsTableSeeder
        $this->call(MenuItemsTableSeeder::class);

        // Llama al seeder DataTypesTableSeeder
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);

        // Permision
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);


        // Llama al seeder RolesTableSeeder
        $this->call(RolesTableSeeder::class);

        // Llama al seeder UsersTableSeeder
        $this->call(UsersTableSeeder::class);

        
        $this->call(PagesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);


        //Voyagger
        
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        
    }
}
