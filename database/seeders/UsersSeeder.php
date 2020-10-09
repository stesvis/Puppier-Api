<?php

namespace Database\Seeders;

use App\Misc\Enums\RolesEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $role_user = Role::where('name', RolesEnum::User)->first();
        $role_admin = Role::where('name', RolesEnum::Admin)->first();
        $role_superadmin = Role::where('name', RolesEnum::SuperAdmin)->first();

        // superadmin
        $user = new User([
            'name' => 'superadmin',
            'email' => 'superadmin@levitica.ca',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc123!'),
            'remember_token' => Str::random(10),
            'phone' => $faker->e164PhoneNumber,
            'profile_photo_path' => $faker->imageUrl(400, 400, 'people'),
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
            'phone' => $faker->e164PhoneNumber,
            'profile_photo_path' => $faker->imageUrl(400, 400, 'people'),
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
