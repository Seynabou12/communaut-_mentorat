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
            $table->bigIncrements('id');
            $table->string('parcours');
            $table->integer('experience');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('domaine_id')->constrained('domaines');
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
