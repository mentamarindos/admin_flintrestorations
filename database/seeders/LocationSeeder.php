<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Dubai Marina',
                'image' => 'storage/locations/JMLXZheNTHscbHsWXUmonc58K662f0k8nDx3CTlO.png',
                'show' => true,
            ],
            [
                'name' => 'Palm Jumeirah',
                'image' => 'storage/locations/Z3MfN5r95QIo9sGezMoHpBzRIjnv8693RWBoloY7.png',
                'show' => true,
            ],
            [
                'name' => 'Downtown Dubai',
                'image' => 'storage/locations/tJY9aRZ4DmkHx60ApyJy2aArf3UGD0UE8cNFblm5.png',
                'show' => true,
            ],
            [
                'name' => 'DIFC',
                'image' => 'storage/locations/BYK0aMDT5javdvYwAb5QlN3LodriadtHPzfc6WSR.png',
                'show' => true,
            ],
        ];

        Location::insert($locations);
    }
}
