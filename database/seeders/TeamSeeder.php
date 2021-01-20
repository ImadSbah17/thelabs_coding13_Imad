<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'nom'=>'Williams',
                'prenom'=>'Christines',
                'fonction'=>'PROJECT MANAGER',
                'titre'=>'GET IN THE LAB AND MEET THE TEAM',
                'src'=>'1.jpg'
            ],
            [
                'nom'=>'Williams',
                'prenom'=>'Christines',
                'fonction'=>'JUNIOR DEVELOPER',
                'titre'=>null,
                'src'=>'2.jpg'
            ],
            [
                'nom'=>'Williams',
                'prenom'=>'Christines',
                'fonction'=>'DIGITAL DESIGNER',
                'titre'=>null,
                'src'=>'3.jpg'
            ],
           

        ]);

    }
}
