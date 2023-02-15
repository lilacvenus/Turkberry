<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    function products() {
        return $this->hasMany(Product::class);
    }

    function descriptions() {
        return $this->hasMany(HeaderDescription::class);
    }
}
