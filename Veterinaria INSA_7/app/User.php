<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','app','apm', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//Mandar nombre y apellidos para mostrarlos en el selec
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->app. ' ' . $this->apm;
    }
    public function getFullEmailAttribute()
    {
        return $this->email ;
    }
    public function citas() {
        return $this->hasOne('App\Citas','id_users')->orderBy('cita');
    }

}
