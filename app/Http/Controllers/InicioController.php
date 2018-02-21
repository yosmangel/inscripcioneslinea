<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesion_oficio;

class InicioController extends Controller
{
    public function index(){

    	$profesion_oficio=profesion_oficio::all();

    	return view('inscripcion.form', compact('profesion_oficio'));
    }
}
