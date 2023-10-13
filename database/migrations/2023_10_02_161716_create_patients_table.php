<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('date_naiss');
            $table->string('tel');
            $table->string('assurance');
            $table->string('tel_urgence');
            $table->string('sutiation_matrimoniale');
            $table->string('commune');
            $table->string('proffession');
            $table->string('groupe_sanguin');
            $table->string('allergie');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};