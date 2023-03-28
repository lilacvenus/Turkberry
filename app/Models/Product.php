<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'image', 'header', 'availability', 'stock'];
    public $timestamps = false;
    public static function boot()
    {

        parent::boot();
        static::created(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'c',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
                'action_at' => Carbon::now()
            ]);
        });

        static::updating(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'u',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
                'action_at' => Carbon::now(),
            ]);
        });

        static::deleting(function($model)
        {
            DB::table('trackings')->insert([
                'table' => $model->getTable(),
                'action' => 'd',
                'table_id' => $model->id,
                'action_by' => Auth::id(),
                'action_at' => Carbon::now(),
            ]);
        });
    }

    function header(){
        return $this->belongsToMany(Header::class);
    }
}
