<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    //A Property has a Type
    public function type()
    {
        return $this->hasOne(Type::class, 'id');
    }

    //A agent can add multiple porperty
    public function user()
    {
        return $this->belongsTo(Type::class, 'id');
    }

    //A Property has a Location
    public function location()
    {
        return $this->hasOne(Location::class, 'id');
    }

    public function Images()
    {
        return $this->hasMany(Property_Image::class,);
    }

    //many users  link many property
    public function users()
    {
        return $this->belongsToMany(User::class,'favorates')->withTimestamps();
    }

}
