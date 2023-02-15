<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    function headers() {
        return $this->hasMany(Header::class);
    }

    function description() {
        return $this->hasMany(GroupDescription::class);
    }

}
