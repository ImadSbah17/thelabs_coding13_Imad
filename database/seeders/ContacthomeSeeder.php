<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContacthomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacthomes')->insert([
            'titre' => 'Contact us',
            'texte' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'contact1' => 'C/ Libertad, 34 <br> 05200 Arévalo',
            'contact2' => '0034 37483 2445 322',
            'contact3' => 'hello@company.com',
        ]);
    }
}
