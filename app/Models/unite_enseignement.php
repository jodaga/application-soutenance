<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unite_enseignement extends Model
{
    use HasFactory;

    protected $primaryKey = 'codUE';
    
    public function matiere() : HasMany
    {
        return $this->hasMany(matiere::class, 'codUE');
    }
    
    public function semestre()
    {
        return $this->belongsTo(semestres::class, 'codS');
    }
}
