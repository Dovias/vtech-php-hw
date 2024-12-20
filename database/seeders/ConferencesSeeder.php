<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Conference::factory()
            ->count(10)
            ->create();
    }
}
