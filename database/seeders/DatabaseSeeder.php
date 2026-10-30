<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::factory()->create([
            'name' => 'Kent Jerone Ramos',
            'first_name' => 'Kent Jerone',
            'last_name' => 'Ramos',
            'middle_name' => 'Lerona',
            'email' => 'admin@example.com',
        ]);
    }
}
