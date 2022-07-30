<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{
    use HasFactory;
    protected $table = 'connexions';
    protected $primarykey = 'id'; 
    protected $guarded = ['id'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function mentore()
    {
        return $this->belongsTo(Mentore::class);
    }

}
