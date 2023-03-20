<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'poste',
        'direct_ligne',
        'portable',
        'email',
        'fonction',
        'service',
        'direction',
        'dga',
        'sous_service',
        'departement',
    ];
}
