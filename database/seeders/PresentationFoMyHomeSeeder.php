<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationFoMyHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentation_fo_my_homes')->insert([
            'texte'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, earum? Cumque facilis est, amet ducimus dolorum quis neque numquam itaque inventore, consequuntur fugiat enim aspernatur!',

            'textebis'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, earum? Cumque facilis est, amet ducimus dolorum quis neque numquam itaque inventore, consequuntur fugiat enim aspernatur!',
            
            'titre'=> null,

            'bouton'=>'ici',
        ]);
    }
}
