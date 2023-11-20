<?php

namespace Database\Seeders;

use App\Models\Tier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiers = [
            [
                'id' => 1,
                'name' => 'Share Intro',
                'starting' => 500,
                'cashback' => 0,
                'referral_reward' => 250,
                'specifications' => [
                    "specification 1",
                    "specification 2",
                    "specification 3",
                    "specification 4"
                ]
            ],
            [
                'id' => 2,
                'name' => 'Share Plus',
                'starting' => 25000,
                'cashback' => 2,
                'referral_reward' => 500,
                'specifications' => [
                    "Dedicated account manager",
                    "Exit Window",
                    "Regular Webnar",
                    "Member Event"
                ]
            ],
            [
                'id' => 3,
                'name' => 'Share Enterprise',
                'starting' => 50000,
                'cashback' => 5,
                'referral_reward' => 1000,
                'specifications' => [
                    "Dedicated account manager",
                    "Early visa registration",
                    "Quis duis facere exp",
                    "Quibusdam similique",
                    "Voluptatem Corrupti",
                    "Member events",
                    "Market updates",
                    "In quia praesentium"
                ]
            ],
        ];

        Tier::insert($tiers);
    }
}
