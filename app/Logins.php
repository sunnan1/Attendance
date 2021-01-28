<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Logins extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'ID';
    protected $table = 'logins';
    protected $fillable = ["username" , "password", "ACTIVE"];
    protected $rememberTokenName = false;
    public $timestamps = false;

    public function nav()
    {
        return $this->hasMany(UserNav::class , 'NAV_ID', 'ID');
    }
}
