<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chambre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantite',
        'hotel_id',
        'user_id',
        'reservation_id',
        'facturation_id',
        'room_categories',
        'capacite',
        'statut',
        'prix',
    ];

    public function hotel(): BelongsTo {
        return $this->belongsTo(Hotel::class);
    }

    public function reservations(): HasMany{
        return $this->hasMany(Reservation::class);
    }


}
