<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_notes extends Model
{
    use HasFactory;

    protected $primaryKey = 'codTN';
    
    public function avoirNote() : HasMany
    {
        return $this->hasMany(avoir_notes::class, 'codTN');
    }
}
