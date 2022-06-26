<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    //---------------- Relationship-------------------//
    public function restaurant()
    {
        return $this->hasOne(Date::class);
    }
    
}
