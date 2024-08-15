<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function __construct(
        private readonly CardSeeder $cardSeeder
    )
    {
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();
        $this->cardSeeder->run();
    }
}
