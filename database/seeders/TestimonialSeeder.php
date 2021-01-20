<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert(
            [
                [
                    'titre'=>'GET IN THE LAB AND DISCOVER THE WORLD',
                    'temoignage'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, dolorem cupiditate dolorum amet omnis aspernatur rerum, maiores optio maxime sunt quaerat aliquid corporis consequuntur tempora delectus modi beatae, nam architecto.,',
                    'src'=>'01.jpg',
                    'nom'=>'Michael',
                    'prenom'=>'Smith',
                    'fonction'=>'CEO Company', 
                ],
                [
                    'titre'=> null,
                    'temoignage'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                    'src'=>'02.jpg',
                    'nom'=>'Sarah',
                    'prenom'=>'Claus',
                    'fonction'=>'Direction Commerciale', 
                ],
                [
                    'titre'=> null,
                    'temoignage'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                    'src'=>'03.jpg',
                    'nom'=>'Jordano',
                    'prenom'=>'Cubeddu',
                    'fonction'=>'Behman', 
                ],
                [
                    'titre'=> null,
                    'temoignage'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                    'src'=>'03.jpg',
                    'nom'=>'Martin',
                    'prenom'=>'M',
                    'fonction'=>'Hndk', 
                ],
                [
                    'titre'=> null,
                    'temoignage'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                    'src'=>'03.jpg',
                    'nom'=>'Cosmin',
                    'prenom'=>'Patrau',
                    'fonction'=>'Rlehman', 
                ],
                [
                    'titre'=> null,
                    'temoignage'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur blanditiis obcaecati illo corporis odio provident excepturi. Iste eveniet sunt quam, recusandae dicta ad quis, consectetur labore quas possimus commodi tempora.,',
                    'src'=>'03.jpg',
                    'nom'=>'Kevin',
                    'prenom'=>'Gois',
                    'fonction'=>'Mieukman', 
                ],
            ],
            );
    }
}
