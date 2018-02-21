<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padron extends Model
{
    public $timestamps = false;
    /**protected $fillable = [
        'id', 'nombre','apellido','usuario','cedula','rif','correo','fecha_nacimiento', 'contrasena', 
        'sexo','fecha_ingreso','direccion','cuenta_bancaria','telefono','ciudad','estado','habilitado',
    ];*/
}
