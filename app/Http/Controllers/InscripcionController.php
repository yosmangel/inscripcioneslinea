<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\padron;
use App\inscripcion;
use App\padron_interno;
use Carbon\Carbon;
use App\data_seguridad;

class InscripcionController extends Controller
{
  
    public function data(Request $request){

    	$padron=padron::where('cedula',$request->cedula)->first();

    	if($padron){
    		$nombre=$padron->nombres;
    		$apellido=$padron->apellido1;
    		$apellido2=$padron->apellido2;
    		$nombremid=explode(" ", $nombre);
             $valor=$nombremid[0].' ';
            if( isset($nombremid[1])){
                $split=str_split($nombremid[1]);
                $arr_length = strlen($nombremid[1]);
               

                for ($i=0; $i < $arr_length; $i++) { 
                        $valor.='*';
                        
                }    
            }
    		
    		if ($apellido) {
    			$split=str_split($apellido);
	    		$arr_length = strlen($apellido); 
	    		for ($i=0; $i < $arr_length; $i++) { 
	    			
	    			if($i==0){
	    				$valor.=" ".$split[0];
	    			}else{
	    				$valor.='*';
	    			}	
	    		}
    		}
	    		
    		if ($apellido2) {
    			$split=str_split($apellido2);
	    		$arr_length = strlen($apellido2);
	    		 
	    		for ($i=0; $i < $arr_length; $i++) { 
	    			
	    			if($i==0){
	    				$valor.=" ".$split[0];
	    			}else{
	    				$valor.='*';
	    			}	
	    		}
    		}
	    		
    		return response()->json([
                                    'status' => "OK",
                                    'nombre'=>$valor

                                    ]);
    	}else{
    		return response()->json([
                                    'status' => 2222
                                    ]);
    	}
    }

    public function create(Request $request){

    	$padron=padron::where('cedula',$request->cedula)->first();
    	if(!$padron){
    		return response()->json([
                                    'status' => 1111
                                    ]);     
    	}
        $cedula=padron::where('cedula', $request->cedula2)->first();
    	if($request->cedula2){
    		

    		if (!$cedula) {
    			return response()->json([
                                    'status' => 2222
                                    ]);		
    		}		
    	}

    	$interno=padron_interno::where('cedula',$request->cedula)->first();
        
    	if($interno){

    		if($request->direccion){
    			if(!$interno->direccion){
    				$interno->direccion=$request->direccion;
    			}
    		}

    		if($request->profesion){
    			if (!$interno->PROFESION_OFICIO) {
    				$interno->PROFESION_OFICIO=$request->profesion;
    			}
    		}

    		if($request->email){
    			if(!filter_var($interno->email, FILTER_VALIDATE_EMAIL)){
    				$interno->email=$request->email;
    			}
    			
    		}

    		if ($cedula) {
    			if ($interno->INSCRITO_POR) {
    				$interno->INSCRITO_POR=$cedula->cedula;
    			}
                $interno->Nombre_InscritoPor=$cedula->nombres.' '.$cedula->apellido1.' '.$cedula->apellido2;
    		}
    		if (!$interno->telefono1) {
    			$interno->telefono1=$request->telefono;
    		}elseif (!$interno->telefono2) {
    			$interno->telefono2=$request->telefono;
    		}else{
    			$interno->telefono3=$request->telefono;
    		}

    		if(!$interno->usr_inscripcion){
    			$interno->usr_inscripcion='public';
    		}

    		if(!$interno->fecha_inscripcion){
    			$interno->fecha_inscripcion=Carbon::now();
    		}
    		
            
            if ($padron) {
                $interno->nombres=$padron->nombres;
                $interno->apellido1=$padron->apellido1;
                $interno->apellido2=$padron->apellido2;
                $interno->FechaNacimiento=$padron->FechaNacimiento;
                $interno->IdEstadoCivil=$padron->IdEstadoCivil;
                $interno->IdSexo=$padron->IdSexo;
                $interno->CodigoColegio=$padron->CodigoColegio;
                $interno->CodigoRecinto=$padron->CodigoRecinto;
                $interno->Recinto= $padron->Recinto;
                $interno->IDDistritoMunicipal=$padron->IDDistritoMunicipal;
                $interno->DistritoM= $padron->DistritoM;
                $interno->CodigoCircunscripcion= $padron->CodigoCircunscripcion;
                $interno->IDMunicipio= $padron->IDMunicipio;
                $interno->Municipio= $padron->Municipio;
                $interno->IDProvincia= $padron->IDProvincia;
                $interno->Provincia= $padron->Provincia;

            }
            
            
    		$interno->usr_update='public';
    		$interno->fecha_update=Carbon::now();
    		
            $interno->save();

    		$inscripcion=inscripcion::create([
    			'cedula'=>$request->cedula,
    			'telefono'=>$request->telefono,
    			'direccion'=>$request->direccion,
    			'correo'=>$request->email,
    			'profesion'=>$request->profesion,
    		]);	

            $datos=data_seguridad::create([
                'ip'=>\Request::ip(),
                'navegador'=>$request->navegador,
                'version'=>$request->version,
                'os'=>$request->os,
            ]);

    		return response()->json([
                                    'status' => "OK"
                                    ]);
    	}else{
            
    		$interno=padron_interno::create([
    			'cedula'=>$request->cedula,
                'nombres'=>$padron->nombres,
                'apellido1'=>$padron->apellido1,
                'apellido2'=>$padron->apellido2,
    			'telefono1'=>$request->telefono,
    			'direccion'=>$request->direccion,
    			'email'=>$request->email,
    			'PROFESION_OFICIO'=>$request->profesion,
    			'ACTIVO'=>'N',
    			'dirigente'=>'N',
    			'usr_inscripcion'=>'public',
    			'fecha_inscripcion'=>Carbon::now(),
    			'usr_update'=>'public',
    			'fecha_update'=>Carbon::now(),
                'CodigoColegio'=>$padron->CodigoColegio,
                'CodigoRecinto'=>$padron->CodigoRecinto,
                'Recinto'=> $padron->Recinto,
                'IDDistritoMunicipal'=>$padron->IDDistritoMunicipal,
                'DistritoM'=> $padron->DistritoM,
                'CodigoCircunscripcion'=> $padron->CodigoCircunscripcion,
                'IDMunicipio'=> $padron->IDMunicipio,
                'Municipio'=> $padron->Municipio,
                'IDProvincia'=> $padron->IDProvincia,
                'Provincia'=> $padron->Provincia,
                'FechaNacimiento'=>$padron->FechaNacimiento,
                'IdSexo'=>$padron->IdSexo,
                'IdEstadoCivil'=>$padron->IdEstadoCivil,

    		]);
            
            if($cedula){
                $interno->Nombre_InscritoPor=$cedula->nombres.' '.$cedula->apellido1.' '.$cedula->apellido2;
                $interno->INSCRITO_POR=$cedula->cedula;
                $interno->save();    
            }
            
            
    		$inscripcion=inscripcion::create([
    			'cedula'=>$request->cedula,
    			'telefono'=>$request->telefono,
    			'direccion'=>$request->direccion,
    			'correo'=>$request->email,
    			'profesion'=>$request->profesion,
    		]);	

            $datos=data_seguridad::create([
                'ip'=>\Request::ip(),
                'navegador'=>$request->navegador,
                'version'=>$request->version,
                'os'=>$request->os,
            ]);
    		return response()->json([
                                    'status' => "OK"
                                    ]);

    	}
    }
}
