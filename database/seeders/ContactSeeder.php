<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'maps' => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2518.693736528877!2d4.3412543!3d50.8553554!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1610978014729!5m2!1sfr!2sbe",
        ]);
    }
}
