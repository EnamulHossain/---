<?php

namespace Database\Seeders;

use App\Models\Accounts\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Dhaka', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Khulna', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Rangpur', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Mymensingh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Sylhet', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Rajshahi', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Chittagong', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Barisal', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];

        Division::insert($data);
    }
}
