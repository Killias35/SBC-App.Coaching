<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\SuperAdminSeeder;
use Database\Seeders\SeancesSeed;
use Database\Seeders\ActiviteSeeder;
use Database\Seeders\CoachSeed;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SuperAdminSeeder::class);
        $this->call(SeancesSeed::class);
        $this->call(ActiviteSeeder::class);
        $this->call(CoachSeed::class);
    }
}
