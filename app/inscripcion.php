<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inscripcion extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cedula','telefono','direccion','correo','profesion',
    ];
}
