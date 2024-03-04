<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Arman Arif',
                'username' => 'armanarif',
                'email' => 'dev@armanarif.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Ahmed Emon',
                'username' => 'ahmedemon',
                'email' => 'ahmedemon@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
            ],
        ]);

        $role = Role::findByName('admin');

        $user = User::find(1);
        $user->assignRole($role);

        $user = User::find(2);
        $user->assignRole($role);

        $user = User::find(3);
        $user->assignRole($role);
    }
}
