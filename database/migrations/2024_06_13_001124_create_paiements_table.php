<?php

use App\Models\Reservation;
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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_paiement')->unique(); /*code generer qui servira de moyen de confirmation de paiement*/
            $table->foreignIdFor(Reservation::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('montant')->nullable();
            $table->string('methode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
