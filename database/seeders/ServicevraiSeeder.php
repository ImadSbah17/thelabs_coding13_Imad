<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicevraiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicevrais')->insert([
            [
                'main_title' => 'GET IN THE LAB AND SEE THE (SERVICES)',
                'icon' =>'flaticon-023-flask',
                'titre' => 'GET IN THE LAB',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => "BROWSE",

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-011-compass',
                'titre' => 'Projects online',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-037-idea',
                'titre' => 'SMART MARKETING',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-039-vector',
                'titre' => 'Social Media',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-036-brainstorming',
                'titre' => 'Brainstorming',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-026-search',
                'titre' => 'Documented',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-018-laptop-1',
                'titre' => 'Responsive',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-043-sketch',
                'titre' => 'Retina ready',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-012-cube',
                'titre' => 'Ultra modern',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ]
        ]
    );   
    }
}
