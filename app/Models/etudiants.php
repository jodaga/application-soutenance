<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class etudiants extends Model
{
    use HasFactory;

    protected $primaryKey = 'numMat';
    
    public function inscriptions():HasMany
    {
        return $this->hasMany(inscription::class, 'numMat');
    }
}
