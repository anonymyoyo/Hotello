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
        'user_id',
        'room__category_id',
        'capacite',
        'statut_id',
        'prix',
    ];

    public function hotel(): BelongsTo {
        return $this->belongsTo(Hotel::class);
    }

    public function reservations(): HasMany{
        return $this->hasMany(Reservation::class);
    }


}
