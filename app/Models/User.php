<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
                'action_at' => Carbon::now(),
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'profile_picture',
        'store',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
