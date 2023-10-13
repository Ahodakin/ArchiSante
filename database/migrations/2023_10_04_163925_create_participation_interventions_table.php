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
        Schema::create('participation_interventions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('description');
            $table->string('observation');
            $table->string('Resultat');
            $table->foreignId('id_intervention')->constrained('interventions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participation_interventions');
    }
};