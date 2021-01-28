<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    protected $table = 'shifts';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['SHIFT_NAME' , 'SHIFT_START' ,'SHIFT_END' , 'NEXT_DAY_END' , 'START_GRACE_TIME' , 'END_GRACE_TIME'];
}
