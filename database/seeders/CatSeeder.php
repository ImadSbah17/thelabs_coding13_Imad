<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->insert([
            ['cat'=>'Vestibulum maximus'],
            ['cat'=>'Nisi eu lobortis pharetra'],
            ['cat'=>'Orci quam accumsan'],
            ['cat'=>'Auguen pharetra massa'],
            ['cat'=>'Tellus ut nulla'],
            ['cat'=>'Etiam egestas viverra'],
        ]);
    }
}
