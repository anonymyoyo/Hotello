<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
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
}
