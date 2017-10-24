<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerants', function (Blueprint $table) {
            $table->string('cingerant')->unique();
            $table->string('nomgerant');
            $table->string('prenomgerant');
            $table->string('adressegerant');
            $table->string('numtelgerant');
            $table->string('idstation');
            $table->primary('cingerant');
            $table->foreign('idstation')->references('idstation')->on('stations')->onDelete('cascade');
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
        Schema::drop('gerants');
    }
}
