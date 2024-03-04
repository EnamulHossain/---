<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Primary\BranchList;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchList::create([
            'id' => 1,
            'name' => 'Main Branch',
            'address' => 'Khulna',
            'hotline' => '0132567890'
        ]);


        // BranchList::factory(10)->create();
    }
}
