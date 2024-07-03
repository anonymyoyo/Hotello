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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_pdg');
            $table->string('email')->unique();
            $table->string('email2')->unique();
            $table->string('genre')->nullable();
            $table->string('phone')->nullable();
            $table->string('license')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('localisation')->nullable();
            $table->string('description');
            $table->string('etoiles')->nullable();
            $table->string('nbre_chambres')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
