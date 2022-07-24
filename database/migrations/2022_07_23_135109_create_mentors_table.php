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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('photo',300);
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->string('region');
            $table->string('telephone');
            $table->string('email');
            $table->string('motDePasse');
            $table->string('confirmeMdp');
            $table->string('parcours');
            $table->integer('nombreAnneeExperience');
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
        Schema::dropIfExists('mentors');
    }
};
