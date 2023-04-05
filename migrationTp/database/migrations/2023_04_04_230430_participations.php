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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('films_id');
            $table->foreign('films_id')->references('id')->on('films');
            $table->unsignedBigInteger('acteur_id');
            $table->foreign('acteur_id')->references('id')->on('acteurs');
            $table->integer("role");
            $table->enum("genre", ["principal", "secondaire"]);
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
