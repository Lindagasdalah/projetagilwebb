<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('cinclient')->unique();
            $table->string('nomclient');
            $table->string('prenomclient');
            $table->string('numtelclient');
            $table->string('produitachete');
            $table->string('idvente');
            $table->string('idstation');
            $table->primary('cinclient');
            $table->foreign('idstation')->references('idstation')->on('stations')->onDelete('cascade');
            $table->foreign('idvente')->references('idvente')->on('ventes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
