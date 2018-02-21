<?php

use Illuminate\Database\Seeder;
use App\profesion_oficio;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profesion_oficio::truncate();

    	$profesion= new profesion_oficio();

       	$profesion->name='ABOGADO(A)';
                
        $profesion->save();

        $profesion= new profesion_oficio();

       	$profesion->name='ADMINISTRADOR(A)';
                
        $profesion->save();

        $profesion= new profesion_oficio();

       	$profesion->name='AGRICULTOR(A)';
                
        $profesion->save();

        $profesion= new profesion_oficio();

       	$profesion->name='AGRIMENSOR(A)';
                
        $profesion->save();

        $profesion= new profesion_oficio();

       	$profesion->name='ALBAÑIL';
                
        $profesion->save();
    }
}
