<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminData = [
            'name' => 'Mahi Bashar Akash',
            'email' => 'mahibashar2023@gmail.com',
            'phone' => '01400125289',
            'preset_address' => 'Fultola More, Jessore Sadar, Jessore, Bangladesh',
            'bio' => 'I am Full Stack Developer',
            'password' => '123123',
            'user_type' => 'admin',
        ];

        if (!User::where('email', $adminData['email'])->exists()) {
            User::create([
                'name' => $adminData['name'],
                'email' => $adminData['email'],
                'phone' => $adminData['phone'],
                'preset_address' => $adminData['preset_address'],
                'bio' => $adminData['bio'],
                'password' => Hash::make($adminData['password']),
                'user_type' => $adminData['user_type'],
            ]);

            $this->command->info('Admin user created successfully.');
        } else {
            $this->command->info('Admin user already exists.');
        }
    }
}
