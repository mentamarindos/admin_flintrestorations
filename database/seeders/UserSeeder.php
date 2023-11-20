<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'role_id' => UserRole::USER->value,
            'name' => 'User',
            'email' => 'user@shareholders.com',
            'phone' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'phone_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        // creating kyc for user
        $user->kyc()->create([
            'name' => 'Germane Sweeney',
            'father_name' => 'Blaine Davidson',
            'dob' => '2017-09-05',
            'gender' => 'female',
            'gender' => 'female',
            'issue_country' => 'Pakistan',
            'passport_number' => '311',
            'passport_expiry' => '1978-08-14',
            'passport_image' => 'storage/kyc/RUbfcukBpaGNVCLohPT5Qp9jwsl7NMCioObFqM7L.png'
        ]);

        // creating user info for user
        $user->user_info()->create([
            'employment_status' => 'student',
            'wealth_source' => 'winnings',
            'tier_id' => 2
        ]);
    }
}
