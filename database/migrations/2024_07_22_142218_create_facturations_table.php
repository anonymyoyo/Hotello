<?php

use App\Models\Paiement;
use App\Models\Reservation;
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
        Schema::create('facturations', function (Blueprint $table) {
            $table->id();
            $table->string('id_facture')->unique();
            $table->foreignIdFor(Paiement::class)->constrained()->restrictOnUpdate()->restrictOnDelete()->default('-');
            $table->foreignIdFor(Reservation::class)->constrained()->restrictOnUpdate()->restrictOnDelete()->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturations');
    }
};
