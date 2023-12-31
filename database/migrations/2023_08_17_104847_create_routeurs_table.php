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
        Schema::create('routeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_routeur');
            $table->string('adresse_routeur', 15);
            $table->string('marque');
            $table->string('modele');
            $table->string('passerelle', 15);
            $table->string('masque', 15);
            $table->foreignId('emplacement_id')->contrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routeurs');
    }
};
