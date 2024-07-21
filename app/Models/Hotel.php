<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'genre',
        'email',
        'email2',
        'phone',
        'localisation',
        'etoiles',
        'nbre_chambres',
        'description',
    ];

    // protected $primaryKey = 'user_id';

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function chambres(): HasMany{
        return $this->hasMany((Chambre::class));
    }

    public function reservations(): HasMany{
        return $this->hasMany(Reservation::class);
    }
}
