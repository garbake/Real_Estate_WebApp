<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Image extends Model
{
    use HasFactory;
    protected $table = 'property_images';

    public function property()
    {
        return $this->hasOne(Property::class);
    }
}
