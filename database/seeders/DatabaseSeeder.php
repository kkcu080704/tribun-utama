<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat Admin Akun Utama
        User::factory()->create([
            'name' => 'Admin Tribun',
            'email' => 'admin@tribun.com',
            'password' => bcrypt('password'),
        ]);

        // Memanggil Seeder Artikel Bola
        $this->call(FootballPostSeeder::class);
    }
}