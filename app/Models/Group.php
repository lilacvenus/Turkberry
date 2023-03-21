<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Group extends Model
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

    function headers() {
        return $this->hasMany(Header::class);
    }

    function description() {
        return $this->hasMany(GroupDescription::class);
    }

}
