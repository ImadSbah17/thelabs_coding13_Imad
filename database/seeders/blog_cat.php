<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blog_cat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('blog_cat')->insert([
            [
               'blog_id'=>'1',
               'cat_id'=>'1',
            ],
            [
                'blog_id'=>'1',
                'cat_id'=>'2',
            ],
            [
                'blog_id'=>'1',
                'cat_id'=>'5',
            ]
        ]);
    }
}
