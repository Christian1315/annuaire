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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('poste');
            $table->string('direct_ligne');
            $table->string('portable');
            $table->string('email');
            $table->string('fonction');
            $table->string('service');
            $table->string('direction');
            $table->string('dga');
            $table->string('sous_service');
            $table->string('departement');
            $table->string('status')->default('Agent');
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
        Schema::dropIfExists('agents');
    }
};
