<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationFoMyHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentation_fo_my_homes', function (Blueprint $table) {
            $table->id();
            $table->string('texte');
            $table->string('textebis');
            $table->string('titre')->nullable();
            $table->string('bouton');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentation_fo_my_homes');
    }
}
