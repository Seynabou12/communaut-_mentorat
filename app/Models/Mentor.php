<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentors';
    protected $primarykey = 'id'; 
    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'region',
        'telephone',
        'email',
        'motDePasse',
        'confirmeMdp',
        'photo',
        'parcours',
        'nombreAnneeExperience',
    ];
}
