<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nationality',
        'expired_at',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
