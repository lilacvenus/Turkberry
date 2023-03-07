<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Group extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->created_by = Auth::id();
        });

        static::updating(function($model)
        {
            $model->updated_by = Auth::id();
        });

        static::deleting(function($model)
        {
            $model->deleted_by = Auth::id();
            $model->save();
        });
    }

    function headers() {
        return $this->hasMany(Header::class);
    }

    function description() {
        return $this->hasMany(GroupDescription::class);
    }

}
