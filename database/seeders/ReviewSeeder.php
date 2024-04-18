<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Review::create([
                'content' => $faker->paragraph(),
                'likes' => $faker->numberBetween(0, 100),
                // 'created_at' și 'updated_at' se vor completa automat
            ]);
        }
    }
}
