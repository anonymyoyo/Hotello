<?php

use App\Http\Middleware\Gerant;
use App\Models\Facturation;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\Roles;
use App\Models\Room_Category;
use App\Models\Room_Equipement;
use App\Models\Room_Position;
use App\Models\Room_view;
use App\Models\Statut;
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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('quantite')->nullable();
            $table->string('name');
            $table->foreignIdFor(Statut::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Hotel::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Room_Category::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('capacite')->nullable();
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
