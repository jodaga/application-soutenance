<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Annee extends Model
{
    use HasFactory;

    protected $primaryKey = 'codAnnee';
    
    public function inscriptions() : Hasmany
    {
        return $this->hasMany(inscription::class, 'codAnnee');
    }
}
