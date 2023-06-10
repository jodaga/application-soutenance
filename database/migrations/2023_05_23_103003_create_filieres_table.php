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
        Schema::create('filieres', function (Blueprint $table) {
            $table->string('codFil');
            $table->string('libelleF');
            $table->timestamps();
        });

        // Remplir la table avec des valeurs

        DB::table('filieres')->insert([
            ['codFil' => 'IG1', 'libelleF' => 'Informatique de gestion'],
            ['codFil' => 'BFA1', 'libelleF' => 'Banque Finance et Assurance'],
            ['codFil' => 'MRH3', 'libelleF' => 'Management des Ressoures Humaines'],
            // Ajoutez d'autres enregistrements ici
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
