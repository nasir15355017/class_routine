<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected  $table='rooms';
    protected $fillable=[
      'id','room_num','type'
    ];
}
