<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             RolesTableSeeder::class,
             PermissionsTableSeeder::class,
             RoleUserTableSeeder::class,
             PermissionRoleTableSeeder::class,
             StagesTableSeeder::class,

             // Seeder for examples only
             DomainsTableSeeder::class,
             AspectsTableSeeder::class,
             IndicatorsTableSeeder::class,
             IndicatorOptionsTableSeeder::class,
             FormsTableSeeder::class
         ]);
    }
}
