<?php

namespace Database\Seeders;

use Database\Seeders\Dev\DevSeeder;
use Database\Seeders\Dev\SchemeSeeder;
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
            StaffRoleSeeder::class,
            UserSeeder::class,
            BrancheSeeder::class,
            VoucherCategorySeeder::class,
            DevSeeder::class,
            SchemeSeeder::class,
            GeneralAcSeeder::class,
            CurrentAcSeeder::class,
            DivisionSeeder::class,
        ]);
    }
}
