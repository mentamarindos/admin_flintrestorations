<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            // TierSeeder::class,
            // UserSeeder::class,
            // GlossarySeeder::class,
            // CategorySeeder::class,
            // FaqSeeder::class,
            // TestimonialSeeder::class,
            // LocationSeeder::class,
            // SellingSeeder::class,
            // CountrySeeder::class,
            // CitySeeder::class,
            // AmenitySeeder::class,
        ]);
    }
}
