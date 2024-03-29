<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['street', 'town', 'parish'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
