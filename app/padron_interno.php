<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padron_interno extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cedula','telefono1','direccion','email','PROFESION_OFICIO','INSCRITO_POR','ACTIVO','dirigente',
        'usr_inscripcion','fecha_inscripcion','usr_update','fecha_update', 'nombres',
        'apellido1', 'apellido2', 'CodigoColegio', 'CodigoRecinto', 'Recinto',
        'IDDistritoMunicipal', 'DistritoM', 'CodigoCircunscripcion', 'IDMunicipio', 'Municipio',
        'Nombre_InscritoPor', 'INSCRITO_POR', 'FechaNacimiento', 'IdSexo', 'IdEstadoCivil','IDProvincia'
    ];
}
