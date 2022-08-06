<?php

namespace App\Models;

use App\Models\Mentor;
use App\Models\Domaine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MentorDomaine extends Model
{
    use HasFactory;

    protected $table = 'mentor_domaines';
    protected $primarykey = 'id'; 
    protected $guarded = ['id'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }
}
