<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';

    protected $fillable = [
        'id',
        'dueno',
        'tel',
        'mascota',
        'edad',
        'raza',
        'tratamiento',
        'cita',
        'vacunas',
        'id_users',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\user');
    }



}
