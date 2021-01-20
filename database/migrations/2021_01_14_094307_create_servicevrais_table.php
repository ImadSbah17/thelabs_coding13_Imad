<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicevraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicevrais', function (Blueprint $table) {
            $table->id();
            $table->string('icon');
            $table->string('main_title')->nullable();
            $table->string('button')->nullable();
            $table->string('titre');
            $table->string('texte');
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
        Schema::dropIfExists('servicevrais');
    }
}
