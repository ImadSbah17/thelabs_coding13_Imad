<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert([
            'titre' => "lorem ipsum",
            'texte' => "lorem ipsum",
            'bouton' => "ici",
        ]);
    }
}
