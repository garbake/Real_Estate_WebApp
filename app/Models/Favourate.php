<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourate extends Model
{
    use HasFactory;
    
    public function like_properties()
    {
        return $this->belongsToMany(Property::class, 'favorites')->withTimestamps();
    }
}
