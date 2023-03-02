<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'foto',
        'precio',
        'cantidad',
        'marca',
        'codigo',
        'status'
    ];
}
