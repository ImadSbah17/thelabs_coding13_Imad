<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomelabsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homelabs')->insert([
            'liens1' =>"Service",
            'liens2' =>"Blog",
            'liens3' =>"Contact",
            'liens4'=> "Elements",
        ]
    );
    }
}
