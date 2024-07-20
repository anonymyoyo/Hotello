<?php

use App\Models\Hotel;
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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hotel::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('numero');
            $table->string('statut')->default('Available');
            $table->string('type')->nullable();
            $table->string('prix')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
