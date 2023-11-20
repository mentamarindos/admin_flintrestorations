<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            [
                'name' => 'Gym',
                'image' => 'storage/amenities/9DIsgJEuKAR4F57WwpYy5rATV7cubQ4DW6Spix4Q.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pool',
                'image' => 'storage/amenities/yks2aziMpg5oz35JmDPGnfI87w2EmK7wRx9EjbOM.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Amenity::insert($amenities);
    }
}
