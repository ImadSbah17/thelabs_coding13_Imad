<?php

namespace Database\Seeders;

use App\Models\Contacthome;
use App\Models\PresentationFoMyHome;
use App\Models\Servicerapide;
use App\Models\Servicevrai;
use App\Models\Vidéo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HomelabsSeeder::class,
            BannerSeeder::class,
            ServiceSeeder::class,
            ReadySeeder::class,
            ContacthomeSeeder::class,
            TestimonialSeeder::class,
            ServicevraiSeeder::class,
            TeamSeeder::class,
            VideoSeeder::class,
            PresentationFoMyHomeSeeder::class,
            ServicerapideSeeder::class,
            ContactSeeder::class,
            BlogSeeder::class,
            TagSeeder::class,
            CatSeeder::class,
            blog_tag::class,
            blog_cat::class,
        ]);
    }
}
