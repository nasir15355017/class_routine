<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table='days';
    protected $fillable=[
        'id','day_name'
    ];
}
