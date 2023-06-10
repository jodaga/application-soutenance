<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avoir_notes extends Model
{
    use HasFactory;

    protected $primaryKey = null;
    public $incrementing = false;
    
    public function matiere()
    {
        return $this->belongsTo(matiere::class, 'codMat');
    }
    
    public function inscription()
    {
        return $this->belongsTo(inscription::class, 'numIns');
    }
    
    public function typeNote()
    {
        return $this->belongsTo(type_notes::class, 'codTN');
    }
}
