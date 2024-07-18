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
        'hotel_id',
        'disponibilite',
        'type',
        'prix',
        'capacite',
    ];

    public function hotel(): BelongsTo {
        return $this->belongsTo(Hotel::class);
    }


}
