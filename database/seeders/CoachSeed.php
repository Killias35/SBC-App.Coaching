<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Seance;

use Illuminate\Support\Facades\Hash;

class CoachSeed extends Seeder
{
    
    public function run(): void
    {
        $user = User::create([
            'name' => 'test Coach',
            'email' => 'testCoach@gmail.com',
            'role' => 'admin',
            'pseudo' => 'test Coach',
            'password' => Hash::make('testCoach'),
        ]);

        for ($i=0; $i < 50; $i++) { 
            Seance::create([
                'user_id' => $user->id,
                'titre' => 'test Seances'.$i,
                'description' => 'test Seances'.$i
            ]);
        }

        User::create([
            'name' => 'test Coach2',
            'email' => 'testCoach2@gmail.com',
            'role' => 'user',
            'pseudo' => 'test Coach2',
            'password' => Hash::make('testCoach2'),
            'coach_id' => $user->id
        ]);
    }
}
