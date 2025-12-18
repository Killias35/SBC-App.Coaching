<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Seance;

use Illuminate\Support\Facades\Hash;

class SeancesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'test Seances',
            'email' => 'testSeances@gmail.com',
            'role' => 'super_admin',
            'pseudo' => 'test Seances',
            'password' => Hash::make('testSeances'),
        ]);

        for ($i=0; $i < 50; $i++) { 
            Seance::create([
                'user_id' => $user->id,
                'titre' => 'test Seances'.$i,
                'description' => 'test Seances'.$i
            ]);
        }
    }
}
