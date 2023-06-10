<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;

    protected $primaryKey = 'codMat';
    
    public function uniteEnseignement()
    {
        return $this->belongsTo(unite_enseignement::class, 'codUE');
    }
}
