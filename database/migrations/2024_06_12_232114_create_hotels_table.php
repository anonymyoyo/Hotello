<?php

use App\Models\User;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('email')->unique();
            $table->string('email2')->unique();
            $table->string('genre')->nullable();
            $table->string('phone')->nullable();
            $table->string('license')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('localisation')->nullable();
            $table->longText('description');
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
