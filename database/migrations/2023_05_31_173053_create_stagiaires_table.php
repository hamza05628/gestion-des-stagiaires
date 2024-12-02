<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
         //   $table->integer('numéro_dinscription');
            $table->string('nom');
            $table->string('prenom');
            $table->string('ecole');
            $table->string('filiere');
            $table->string('ville');
            $table->string('phone');
            $table->date('date_de_début');
            $table->date('date_de_fin');
            $table->string('Demande_Stage');
            $table->string('CV');
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
        Schema::dropIfExists('stagiaires');
    }
};
