<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padrons', function (Blueprint $table) {
            $table->string('cedula')->primary();
            $table->string('nombres')->nullable();
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('IdSexo')->nullable();
            $table->string('IdEstadoCivil')->nullable();
            $table->string('CodigoColegio')->nullable();
            $table->string('CodigoRecinto')->nullable();
            $table->string('Recinto')->nullable();
            $table->string('IDDistritoMunicipal')->nullable();
            $table->string('DistritoM')->nullable();
            $table->string('CodigoCircunscripcion')->nullable();
            $table->string('IDMunicipio')->nullable();
            $table->string('Municipio')->nullable();
            $table->string('IDProvincia')->nullable();
            $table->string('Provincia')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padrons');
    }
}
