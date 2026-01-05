<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Activite;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Activites Systeme',
            'email' => 'testActivites@gmail.com',
            'role' => 'user',
            'pseudo' => 'Activites Systeme',
            'password' => Hash::make('testActivites'),
        ]);
        $noms = [
            'Développé couché',
            'Squat',
            'Soulevé de terre',
            'Tractions',
            'Développé militaire',
            'Rowing haltère',
            'Gainage'
        ];

        $descriptions = [
            "Exercice polyarticulaire pour le haut du corps qui sollicite principalement les pectoraux, triceps et épaules.", // Développé couché
            "Mouvement de base pour le bas du corps, engageant quadriceps, fessiers et les muscles stabilisateurs.", // Squat
            "Exercice complet de force sollicitant le dos, les fessiers et les ischio-jambiers.", // Soulevé de terre
            "Exercice de tirage au poids du corps principalement pour le dos et les biceps.", // Tractions
            "Développé debout pour travailler les épaules, en mettant l’accent sur les deltoïdes.", // Développé militaire
            "Tirage unilatéral avec haltère ciblant le dos, particulièrement le grand dorsal.", // Rowing haltère
            "Exercice de renforcement du tronc en position statique, excellent pour les abdominaux et la sangle.", // Gainage
        ];

        $images = [
            "https://www.docteur-fitness.com/wp-content/uploads/2019/08/developpe-couche.gif", // exemple Bench Press / développé couché 
            "https://projet-muscle.fr/wp-content/uploads/2025/11/squats-barre.png", // exemple Squat free weights 
            "https://www.docteur-fitness.com/wp-content/uploads/2021/12/souleve-de-terre.gif", // exemple Deadlift barbell 
            "https://i0.wp.com/www.fitnessmith.fr/wp-content/uploads/reussir-traction-.jpg?ssl=1/", // exemple Pull up bar 
            "https://cdn.shopify.com/s/files/1/1633/7705/files/overhead_press_muscles_worked_1af5299a-2305-4dbb-9c20-2eb769ccf025_480x480.jpg?v=1637053355", // exemple Overhead press / militaire 
            "https://cdn-blog.superprof.com/blog_fr/wp-content/uploads/2025/05/rowing-haltere-une-main-superprof-1946x1067.jpg.webp", // exemple Dumbbell row 
            "https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExajR2ODZrdnQ3OTF6NHJnbG9rYm1oOHd0YTI4c2tzbTU4NnB1dDc0MSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Qw4X3FHASsw4VxkR7he/giphy.gif", // exemple Plank / gainage 
        ];


        for ($i = 0; $i < count($noms); $i++) {
            Activite::create([
                'nom' => $noms[$i],
                'description' => $descriptions[$i],
                'image' => $images[$i],
                'user_id' => $user->id,
            ]);
        }
    }
}
