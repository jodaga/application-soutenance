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
        Schema::create('matieres', function (Blueprint $table) {
            $table->string('codMat');
            $table->string('libelle');
            $table->integer('credit');
            $table->timestamps();
        });

        // DB::table('matieres')->insert([
        //     ['codMat' => 'MAT1', 'libelle' => 'Mathématiques', 'credit' => 4],
        //     ['codMat' => 'PHYS1', 'libelle' => 'Physique', 'credit' => 3],
        //     ['codMat' => 'INFO1', 'libelle' => 'Informatique', 'credit' => 5],
        //     // Ajoutez d'autres enregistrements ici
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
