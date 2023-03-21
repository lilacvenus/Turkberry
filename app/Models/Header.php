<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Header extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'c',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
            ]);
        });

        static::updating(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'u',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
            ]);
        });

        static::deleting(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'd',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
            ]);
        });
    }

    function products() {
        return $this->hasMany(Product::class);
    }

    function descriptions() {
        return $this->hasMany(HeaderDescription::class);
    }
}
