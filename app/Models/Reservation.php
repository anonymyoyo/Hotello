<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'hotel_id',
        'user_id',
        'chambre_id',
        'date_fin',
        'statut',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function hotel():BelongsTo{
        return $this->belongsTo(Hotel::class);
    }

    public function chambre():BelongsTo{
        return $this->belongsTo(Chambre::class);
    }

    public function paiement():HasOne{
        return $this->hasOne(Paiement::class);
    }
}
