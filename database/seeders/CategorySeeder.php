<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Sell',
                'slug' => 'sell',
                'description' => 'Sell Page Faqs',
                'show' => true,
            ],
            [
                'name' => 'About Shareholders',
                'slug' => 'about-shareholders',
                'description' => 'Learn more about Stake and how to get started',
                'show' => true,
            ],
            [
                'name' => 'Investing',
                'slug' => 'investing',
                'description' => 'All your questions about how to invest using Stake, answered!',
                'show' => true,
            ],
            [
                'name' => 'Returns',
                'slug' => 'returns',
                'description' => 'Learn more about expected returns',
                'show' => true,
            ],
            [
                'name' => 'Exit windows',
                'slug' => 'exit-windows',
                'description' => 'FAQs and informational articles about our property exit windows',
                'show' => true,
            ],
            [
                'name' => 'Funding and Withdrawals',
                'slug' => 'funding-and-withdrawals',
                'description' => 'Everything you need to know about transferring funds',
                'show' => true,
            ],
            [
                'name' => 'Regulations',
                'slug' => 'regulations',
                'description' => 'Learn more about the regulatory environment we operate in',
                'show' => true,
            ],
        ];

        Category::insert($categories);
    }
}
