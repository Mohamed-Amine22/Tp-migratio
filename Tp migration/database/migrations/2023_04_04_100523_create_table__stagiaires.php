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
        Schema::create('table__stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom_complet", 300);
            $table->enum("genre", ["M", "F"])->default("M");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__stagiaires');
    }
};
