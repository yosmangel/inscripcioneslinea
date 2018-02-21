<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadronInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padron_internos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula',11);
            $table->string('nombres', 100)->nullable();
            $table->string('apellido1',100)->nullable();
            $table->string('apellido2',100)->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('IdSexo',2)->nullable();
            $table->string('IdEstadoCivil',2)->nullable();
            $table->string('telefono1',10)->nullable();
            $table->string('telefono2',10)->nullable();
            $table->string('telefono3',10)->nullable();
            $table->string('NOMBRE_FAMILIAR')->nullable();
            $table->string('TELEFONO_FAMILIAR',10)->nullable();
            $table->string('email')->nullable();
            $table->text('direccion')->nullable();
            $table->string('INSCRITO_POR',11)->nullable();
            $table->text('Nombre_InscritoPor')->nullable();
            $table->integer('PROFESION_OFICIO')->nullable();
            $table->string('frente_movimiento',150)->nullable();
            $table->text('notas')->nullable();
            $table->string('CodigoColegio',8)->nullable();
            $table->string('CodigoRecinto',8)->nullable();
            $table->text('Recinto')->nullable();
            $table->string('IDDistritoMunicipal',5)->nullable();
            $table->text('DistritoM')->nullable();
            $table->string('CodigoCircunscripcion',5)->nullable();
            $table->string('IDMunicipio',5)->nullable();
            $table->text('Municipio')->nullable();
            $table->string('IDProvincia',5)->nullable();
            $table->string('Provincia',100)->nullable();
            $table->char('ACTIVO',1)->nullable();
            $table->char('dirigente',1)->nullable();
            $table->string('usr_inscripcion',12)->nullable();
            $table->date('fecha_inscripcion')->nullable();
            $table->string('usr_update',12)->nullable();
            $table->date('fecha_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('padron_internos');
    }
}
