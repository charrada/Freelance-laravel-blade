<?php

namespace Database\Seeders;

use App\Claim;
use Illuminate\Database\Seeder;

class ClaimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Faker to generate random data
        $faker = \Faker\Factory::create();

        // Create 10 dummy claims
        for ($i = 0; $i < 10; $i++) {
            Claim::create([
                'claim_mail' => $faker->email,
                'claim_title' => $faker->sentence,
                'claim_details' => $faker->paragraph,
                // Add other fields if needed
            ]);
        }
    }
}
