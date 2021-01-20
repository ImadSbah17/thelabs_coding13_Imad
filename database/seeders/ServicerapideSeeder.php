<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicerapideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicerapides')->insert(
            [
            'titre'=> 'GET IN THE LAB AND DISCOVER THE WORLD',
            'bouton'=>'BROWSE',
            ]
    );
    }
}
