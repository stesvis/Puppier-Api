<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_superadmin = Role::where('name', 'superadmin')->first();

        // superadmin
        $user = new User([
            'name' => 'superadmin',
            'email' => 'superadmin@levitica.ca',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc123!'),
            'remember_token' => Str::random(10),
        ]);
        $user->save();
        $user->roles()->attach($role_superadmin);

        // admin
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@levitica.ca',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc123!'),
            'remember_token' => Str::random(10),
        ]);
        $user->save();
        $user->roles()->attach($role_admin);

        // other users
        User::factory(10)
            ->create()
            ->each(function ($user) use ($role_user) {
                $user->roles()->attach($role_user);
            });
    }
}
