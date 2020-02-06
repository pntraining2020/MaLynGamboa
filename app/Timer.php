<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    protected $fillable = [
        'users_id', 'stopped_at', 'started_at'
        ];
}
