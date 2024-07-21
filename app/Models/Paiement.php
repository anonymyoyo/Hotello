<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paiement',
        'reservation_id',
        'user_id',
        'montant',
        'methode',
    ];

    public function reservation():BelongsTo{
        return $this->belongsTo(Reservation::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
