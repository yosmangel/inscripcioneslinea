<?php

use Illuminate\Database\Seeder;
use App\padron;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	padron::truncate();

    	$padron= new padron();

       	$padron->cedula='00100000017';
        $padron->nombres='ALTAGRACIA';
        $padron->apellido1='ABREU';
        $padron->apellido2='GUZMAN';
        $padron->FechaNacimiento='1952-11-11';
        $padron->IdSexo='F';
        $padron->IdEstadoCivil='S';
        $padron->CodigoColegio='1788';
        $padron->CodigoRecinto='501';
        $padron->Recinto='CLUB DE LEONES EL MILLON';
        $padron->IDDistritoMunicipal='1';
        $padron->DistritoM='DISTRITO NACIONAL';
        $padron->CodigoCircunscripcion='1';
        $padron->IDMunicipio='1';
        $padron->Municipio='DISTRITO NACIONAL';
        $padron->IDProvincia='1';
        
        $padron->save();

        $padron= new padron();

       	$padron->cedula='00100000108';
        $padron->nombres='ROSA MARIA';
        $padron->apellido1='ALMONTE';
        $padron->apellido2='LANTIGUA';
        $padron->FechaNacimiento='1973-10-02';
        $padron->IdSexo='F';
        $padron->IdEstadoCivil='S';
        $padron->CodigoColegio='1722';
        $padron->CodigoRecinto='417';
        $padron->Recinto='ESCUELA BASICA LOS VALIENTES';
        $padron->IDDistritoMunicipal='1';
        $padron->DistritoM='DISTRITO NACIONAL';
        $padron->CodigoCircunscripcion='1';
        $padron->IDMunicipio='1';
        $padron->Municipio='DISTRITO NACIONAL';
        $padron->IDProvincia='1';
        
        $padron->save();

        $padron= new padron();

       	$padron->cedula='00100000124';
        $padron->nombres='ENILDA';
        $padron->apellido1='ALONZO';
        $padron->apellido2='JOSE';
        $padron->FechaNacimiento='1960-11-09';
        $padron->IdSexo='F';
        $padron->IdEstadoCivil='S';
        $padron->CodigoColegio='1';
        $padron->CodigoRecinto='125';
        $padron->Recinto='CENTRO DE EXCELENCIA SALOME UREÑA';
        $padron->IDDistritoMunicipal='1';
        $padron->DistritoM='DISTRITO NACIONAL';
        $padron->CodigoCircunscripcion='1';
        $padron->IDMunicipio='1';
        $padron->Municipio='DISTRITO NACIONAL';
        $padron->IDProvincia='1';
        
        $padron->save();

    }
}
