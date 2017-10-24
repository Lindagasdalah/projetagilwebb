<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgiltirages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agiltirages', function (Blueprint $table) {
            $table->string('idtirage')->unique();
            $table->Date('datedebut');
            $table->Date('datefin');
            $table->primary('idtirage');
            $table->string('cinclient');
            $table->foreign('cinclient')->references('cinclient')->on('clients')->onDelete('cascade');
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
        Schema::drop('agiltirages');
    }
}
