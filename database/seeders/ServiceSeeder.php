<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'main_title' => 'GET IN THE LAB AND SEE THE (SERVICES)',
                'icon' =>'flaticon-023-flask',
                'title' => 'GET IN THE LAB',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => "BROWSE",

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-011-compass',
                'title' => 'Projects online',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-037-idea',
                'title' => 'SMART MARKETING',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-039-vector',
                'title' => 'Social Media',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-036-brainstorming',
                'title' => 'Brainstorming',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-026-search',
                'title' => 'Documented',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-018-laptop-1',
                'title' => 'Responsive',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-043-sketch',
                'title' => 'Retina ready',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icon' =>'flaticon-012-cube',
                'title' => 'Ultra modern',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ]
        ]
    );
    }
}
