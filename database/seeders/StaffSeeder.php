<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Primary\Staffs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = Staffs::create([
            'join' => date('Y-m-d'),
            'name' => 'Officer',
            'birthday' => '2000-01-01',
            'gender' => 1,
            'mobile' => '123456',
            'address' => Factory::create()->address(),
            'designation' => 'Field Officer',
            'publish' => 1,
            'user_role' => 3,
            'branch' => 1,
            'active' => 1,
        ]);
        $user = User::create([
            'name' => 'Officer',
            'username' => 'officer',
            'email' => 'officer@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ]);
        $staff->update(['user_id' => $user->id]);
        $role = Role::findByName('field-officer');
        $user->assignRole($role);

        // accountant
        $staff = Staffs::create([
            'join' => date('Y-m-d'),
            'name' => 'Accountant',
            'birthday' => '2000-01-01',
            'gender' => 1,
            'mobile' => '123654789',
            'address' => Factory::create()->address(),
            'designation' => 'Accountant',
            'publish' => 1,
            'user_role' => 4,
            'branch' => 1,
            'active' => 1,
        ]);
        $user = User::create([
            'name' => 'Accountant',
            'username' => 'accountant',
            'email' => 'accountant@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ]);
        $user->save();
        $staff->update(['user_id' => $user->id]);
        $role = Role::findByName('accountant');
        $user->assignRole($role);
    }
}
