<?php

namespace Database\Seeders;

use App\Models\AdminLogin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminLogin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin@123'),
        ]);
    }
}
