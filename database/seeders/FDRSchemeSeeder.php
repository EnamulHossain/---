<?php

namespace Database\Seeders;

use App\Models\Primary\FixedDipositScheme;
use Illuminate\Database\Seeder;

class FDRSchemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FixedDipositScheme::insert(
            [
                [
                    'name' => '100000Tk for 1 year',
                    'type' => 2,
                    'duration' => 12,
                    'profit' => rand(8, 10),
                    'note' => null,
                ]
            ]
        );
    }
}
