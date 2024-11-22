<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@simulacro.com',
            'password' => Hash::make('admin')
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@simulacro.com',
            'password' => Hash::make('test')
        ]);
    }
}
