<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'userinfo';
    protected $primaryKey = 'ID';

    public function departments()
    {
        return $this->belongsTo(Departments::class , 'DEPT_ID' , 'ID');
    }

    public function checkinout()
    {
        return $this->hasMany(CheckInOut::class, 'USERID','ID');
    }


}
