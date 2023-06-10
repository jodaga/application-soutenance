<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;

    protected $primaryKey = 'codFil';
    
    public function inscriptions():HasMany
    {
        return $this->hasMany(inscription::class, 'codFil');
    }
}
