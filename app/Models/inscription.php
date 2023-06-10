<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;

    protected $primaryKey = 'numIns';
    
    public function etudiant() 
    {
        return $this->belongsTo(Etudiant::class, 'numMat');
    }
    
    public function filiere()
    {
        return $this->belongsTo(filiere::class, 'codFil');
    }
    
    public function annee()
    {
        return $this->belongsTo(Annee::class, 'codAnn');
    }

    public function avoirNote() : HasMany
    {
        return $this->hasMany(avoir_notes::class, 'numIns');
    }
}
