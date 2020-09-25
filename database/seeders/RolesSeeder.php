<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_manager = new Role([
            'name' => 'superadmin',
            'description' => 'The superadmin user',
        ]);
        $role_manager->save();

        $role_manager = new Role([
            'name' => 'admin',
            'description' => 'An admin user',
        ]);
        $role_manager->save();

        $role_employee = new Role([
            'name' => 'user',
            'description' => 'A regular user',
        ]);
        $role_employee->save();
    }
}
