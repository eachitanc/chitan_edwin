<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'Editorial';
    
    public function product(){
        return $this->hasMany(Libro::class,'id');
    }
}
