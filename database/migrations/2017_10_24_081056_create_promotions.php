<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->string('idpromot')->unique();
            $table->float('pourcentage');
            $table->float('prixfinal');
            $table->date('datedebut');
            $table->date('datefin');
            $table->string('idstation');
            $table->string('idproduit');
            $table->primary('idpromot');
            $table->foreign('idstation')->references('idstation')->on('stations')->onDelete('cascade');
            $table->foreign('idproduit')->references('idproduit')->on('produits')->onDelete('cascade');
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
        Schema::drop('promotions');
    }
}
