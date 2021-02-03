<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';

    public function lib(){
        return $this->belongsTo(Editorial::class,'nombre');
    }
}
