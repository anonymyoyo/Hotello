<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'license',
        'tax_number',
        'localisation',
        'etoiles',
        'nbre_chambres',
        'description',
    ];
}
