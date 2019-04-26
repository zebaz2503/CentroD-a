<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('foto');
            $table->string('tipo_documento');
            $table->string('fecha_nacimiento');
            $table->string('numero_documento');

            $table->string('edad');
            $table->string('sisben');
            $table->string('puntaje_sisben');
            $table->string('sexo');
            $table->string('afiliacion_eps');
            $table->string('estado_eps');
            $table->string('nombre_eps');

            $table->string('condicion_poblacion');

            $table->string('nivel_educativo');

            $table->string('organizacion_asociacion');

            $table->string('subsidio');
            $table->string('tipo_subsidio');
            $table->string('cual_subsidio');
            
            $table->string('tiempo_libre');

            $table->string('departamento');
            $table->string('municipio');
            $table->string('zona_residencia'); //ya sea urbana o rural
            $table->string('direccion');

            $table->string('telefono');
            $table->string('telefono_movil');
            $table->string('correo');

            $table->string('nombre_contacto');
            $table->string('telefono_parentesco');
            $table->string('parentesco');

            $table->string('actividad_principal');

            $table->string('expectativas');

            $table->string('condicion_medica');

            $table->string('fecha_ingreso');
            $table->string('observaciones');
            $table->string('nombre_funcionario');
            
            
            
            
            
            
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
