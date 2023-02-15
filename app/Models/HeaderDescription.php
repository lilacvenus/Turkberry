<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderDescription extends Model
{
    use HasFactory;

    function header() {
        return $this->belongsTo(Header::class);
    }
}
