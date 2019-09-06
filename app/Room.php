<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'roomId';
    protected $table = 'room';
    
}
