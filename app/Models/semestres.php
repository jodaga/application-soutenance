<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semestres extends Model
{
    use HasFactory;

    protected $primaryKey = 'codS';
    
    public function unitesEnseignement() : HasMany
    {
        return $this->hasMany(unite_enseignement::class, 'codS');
    }
}
