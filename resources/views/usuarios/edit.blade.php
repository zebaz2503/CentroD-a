@extends('layouts.app')
@section('content')

<div class="container">

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>
        {{ $error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ url('/usuarios/'.$usuario->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

<h1>ACTUALIZAR DATOS CENTRO DIA O VIDA</h1>
<br/>
<center>

<img class="login-logo" src="{{ asset('css/LOGO.jpg') }}" width="480" height="150" />
</center>
<br>
<h3>IDENTIFICACIÓN BÁSICA DEL BENEFICIARIO(A)</h3>
<br/>


<div class="portlet light bordered">
    

     <div class="form-group">
                    <label for="primer_nombre" class="control-label">{{'Nombres'}}</label>

                    <input type="text" class="form-control {{$errors->has('primer_nombre')? 'is-invalid':'' }} " name="primer_nombre" id="primer_nombre" 
                    value="{{ isset($usuario->primer_nombre)?$usuario->primer_nombre:old('primer_nombre')}}" readonly>

                    {!! $errors->first('primer_nombre','<div class="invalid-feedback">:message</div>') !!}

                </div>
            

            <!-- -------------------------------   -------------------------------------------->

            <!-- -------------------------------   -------------------------------------------->
            
                <div class="form-group">
                    <label for="primer_apellido" class="control-label">{{' Apellidos'}}</label>

                    <input type="text" class="form-control {{$errors->has('primer_apellido')? 'is-invalid':'' }}" name="primer_apellido" id="primer_apellido" 
                    value="{{ isset($usuario->primer_apellido)?$usuario->primer_apellido:old('primer_apellido')}}" readonly>

                    {!! $errors->first('primer_apellido','<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            <!-- -------------------------------   -------------------------------------------->

            <!-- -------------------------------   -------------------------------------------->
            
                <div class="form-group">
                    <label for="foto" class="control-label">{{'Foto'}}</label>
                    @if(isset($usuario->foto))
                    <br/>
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuario->foto}}" alt="" width="200">
                    <br/>
                    @endif
                    
                    <input type="file" class="form-control {{$errors->has('foto')? 'is-invalid':'' }}" name="foto" id="foto" value="">

                    {!! $errors->first('foto','<div class="invalid-feedback">:message</div>') !!}
                </div>
               
            <!-- -------------------------------   -------------------------------------------->
      
            <!--<div class="col-md-6">
                <div class="form-group">

                    <label for="tipo_documento" class="control-label">{{'Tipo de Documento'}}</label>

                    <select for="tipo_documento" class="form-control {{$errors->has('tipo_documento')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="tipo_documento" 
                        id="tipo_documento" 
                         value="{{ isset($usuario->tipo_documento) ? $usuario->tipo_documento:old('tipo_documento') }}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Cedula Ciudadania">Cedula Ciudadanía</option>
                        <option value="Registro de Nacimiento NUIP">Registro de Nacimiento NUIP</option>
                        <option value="Cedula de Extrangería">Cedula de Extrangería</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Tarjeta de Extrangería">Tarjeta de Extrangería</option>
                    </select>

                    {!! $errors->first('tipo_documento','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>-->
            <!-- -------------------------------   -------------------------------------------->
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_nacimiento" class="control-label">{{'Fecha de Nacimiento'}}</label>
                    <input type="date" class="form-control {{$errors->has('fecha_nacimiento')? 'is-invalid':'' }}" name="fecha_nacimiento" id="fecha_nacimiento" 
                     value="{{ isset($usuario->fecha_nacimiento)?$usuario->fecha_nacimiento:old('fecha_nacimiento')}}">

                     {!! $errors->first('fecha_nacimiento','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> -->
            <!-- -------------------------------   -------------------------------------------->
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="numero_documento" class="control-label">{{'Numero de Documento'}}</label>
                    <input type="text"  class="form-control {{$errors->has('numero_documento')? 'is-invalid':'' }}" name="numero_documento" id="numero_documento" 
                    value="{{ isset($usuario->numero_documento)?$usuario->numero_documento:old('numero_documento')}}">

                    {!! $errors->first('numero_documento','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> -->
            <br/>
            <!-- -------------------------------   -------------------------------------------->
<!-- -------------------------------   -Nuevo formulario ------------------------------------------->
            
                <div class="form-group">
                    <label for="edad" class="control-label">{{'Edad'}}</label>
                    <input type="text"  class="form-control {{$errors->has('edad')? 'is-invalid':'' }}" name="edad" id="edad" 
                    value="{{ isset($usuario->edad)?$usuario->edad:old('edad')}}">

                    {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
                </div>
            
 <!-- -------------------------------   -------------------------------------------->
<!-- -------------------------------   -------------------------------------------->
      
            <!-- <div class="col-md-6">
                <div class="form-group">

                    <label for="sexo" class="control-label">{{'Sexo'}}</label>

                    <select for="sexo" class="form-control {{$errors->has('sexo')? 'is-invalid':'' }}" data-placeholder="Elija una opción" 
                        name="sexo" 
                        id="sexo" 
                        tabindex="1" value="{{ isset($usuario->sexo) ? $usuario->sexo:old('sexo') }}">

                        {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>') !!}

                        <option disabled selected="">Elija una opción...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>

                    </select>
                    {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>') !!}

                    
                </div>
            </div> -->


<!-- -------------------------------   -------------------------------------------->
           
         

    <div class="form-group">
<h3>DATOS SISBEN</h3>
<br/>
<!-- 
                    <label for="sisben" class="control-label">{{'Sisben'}}</label>

                    <select for="sisben" class="form-control {{$errors->has('sisben')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="sisben" 
                        id="sisben" 
                        tabindex="1" value="{{ isset($usuario->sisben) ? $usuario->sisben:old('sisben') }}">

                        {!! $errors->first('sisben','<div class="invalid-feedback">:message</div>') !!}

                        <option disabled selected="">Elija una opción...</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                                     
                    </select>
                    {!! $errors->first('sisben','<div class="invalid-feedback">:message</div>') !!}
                   
                </div>
            </div> -->
<!-- -------------------------------   -------------------------------------------->
      
            <!-- <div class="col-md-6">
                <div class="form-group">
<br/>
<br/>
<br/>
                    <label for="puntaje_sisben" class="control-label">{{'Puntaje Sisben'}}</label>
                    <input type="text"  class="form-control {{$errors->has('puntaje_sisben')? 'is-invalid':'' }}" name="puntaje_sisben" id="puntaje_sisben" 
                    value="{{ isset($usuario->puntaje_sisben)?$usuario->puntaje_sisben:old('puntaje_sisben')}}">

                    {!! $errors->first('puntaje_sisben','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> -->

            
<!-------------------------------------------------------------------------------------------------------->            
            
            <!-- <div class="col-md-6">
                <div class="form-group">

                    <label for="afiliacion_eps" class="control-label">{{'Afiliación EPS'}}</label>

                    <select for="afiliacion_eps" class="form-control {{$errors->has('afiliacion_eps')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="afiliacion_eps" 
                        id="afiliacion_eps" 
                        tabindex="1" value="{{ isset($usuario->afiliacion_eps) ? $usuario->afiliacion_eps:old('afiliacion_eps') }}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                     
              
                    </select>
                    {!! $errors->first('afiliacion_eps','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div> -->

<!-------------------------------------------------------------------------------------------------------->            
            
            
                <div class="form-group">

                    <label for="estado_eps" class="control-label">{{'Estado EPS'}}</label>

                    <select for="estado_eps" class="form-control {{$errors->has('estado_eps')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="estado_eps" 
                        id="estado_eps" 
                        tabindex="1" value="{{ isset($usuario->estado_eps) ? $usuario->afiliacion_eps:old('estado_eps') }}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Contributiva">Contributiva</option>
                        <option value="Subsidiada">Subsidiada</option>
                        <option value="Regimen Especial">Regimen Especial</option>
              
                    </select>
                    {!! $errors->first('estado_eps','<div class="invalid-feedback">:message</div>') !!}

                </div>
            

<!-- -------------------------------   -------------------------------------------->
      
            
                <div class="form-group">
                    <label for="nombre_eps" class="control-label">{{'Nombre EPS'}}</label>
                    <input type="text"  class="form-control {{$errors->has('nombre_eps')? 'is-invalid':'' }}" name="nombre_eps" id="nombre_eps" 
                    value="{{ isset($usuario->nombre_eps)?$usuario->nombre_eps:old('nombre_eps')}}">

                    {!! $errors->first('nombre_eps','<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            
     </div>
            
<!-- -------------------------------   -------------------------------------------->
      
            <!-- <div class="col-md-6">
                <div class="form-group">
<h3>CONDICIONES POBLACIONALES</h3> -->

                    <!-- <label for="condicion_poblacion" class="control-label">{{'Condición Pablacional'}}</label>

                    <select for="condicion_poblacion" class="form-control {{$errors->has('condicion_poblacion')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="condicion_poblacion" 
                        id="condicion_poblacion" 
                        tabindex="1" value="{{ isset($usuario->condicion_poblacion) ? $usuario->condicion_poblacion:old('condicion_poblacion') }}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Victima del conflicto">Victima del conflicto</option>
                        <option value="Reinsertado(a)">Reinsertado(a)</option>
                        <option value="Desmovilizado(a)">Desmovilizado(a)</option>
                        <option value="Pueblos Indigenas">Pueblos Indigenas</option>
                        <option value="Madre cabeza de familia">Madre Cabeza de Familia</option>
                        <option value="Persona en condicion de discapacidad">Persona en Condición de Discapacidad</option>
                        <option value="Comunidades Afrocolombianas">Contributiva</option>
                        <option value="Pueblos Gitanos">Pueblos Rrom (Gitanos)</option>
                        <option value="Red Unidos">Red Unidos</option>
                        <option value="Otros">Otro</option>

                    </select>
                    {!! $errors->first('condicion_poblacion','<div class="invalid-feedback">:message</div>') !!}
                   
<br/>   
                </div>
            </div> -->
<!-- -------------------------------   -------------------------------------------->
      
            <!--<div class="col-md-6">
                <div class="form-group">
<h3>NIVEL EDUCATIVO </h3>

                     <label for="nivel_educativo" class="control-label">{{'Nivel Educativo'}}</label>

                    <select for="nivel_educativo" class="form-control {{$errors->has('nivel_educativo')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="nivel_educativo" 
                        id="nivel_educativo" 
                        tabindex="1" value="{{ isset($usuario->nivel_educativo) ? $usuario->nivel_educativo:old('nivel_educativo') }}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Ninguno">Ninguno</option>
                        <option value="Primaria Completa">Primaria Completa</option>
                        <option value="Primaria Incompleta">Primaria Incompleta</option>
                        <option value="Secundaria Completa">Secundaria Completa</option>
                        <option value="Secundaria Incompleta">Secundaria Incompleta</option>
                        <option value="Técnica/Tecnologia Completa">Técnica/Tecnologia Completa</option>
                        <option value="Técnica/Tecnologia Incmpleta">Técnica/Tecnologia Incompleta</option>
                        <option value="Universitaria Completa">Universitaria Completa</option>
                        <option value="Universitaria Incompleta">Universitaria Incompleta</option>
                        <option value="Postgrado Completo">Postgrado Completo</option>
                        <option value="Postgrado Incompleto">Postgrado Incompleto</option>
                        
                    
                    </select>
                    {!! $errors->first('nivel_educativo','<div class="invalid-feedback">:message</div>') !!}
                   
<br/>        
                </div>
            </div> -->
<!---------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------->            
<div class="portlet light bordered">

                            <div class="form-group">

                                <label for="organizacion_asociacion" class="control-label">{{'Pertenece ha alguna Organización(es) Y/O Asociación(es)  ?'}}</label>

                                <select for="organizacion_asociacion" class="form-control {{$errors->has('organizacion_asociacion')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                                    name="organizacion_asociacion" 
                                    id="organizacion_asociacion" 
                                    tabindex="1" value="{{ isset($usuario->organizacion_asociacion) ? $usuario->organizacion_asociacion:old('organizacion_asociacion') }}">
                                    <option disabled selected="">Elija una opción...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                
                        
                                </select>
                                {!! $errors->first('organizacion_asociacion','<div class="invalid-feedback">:message</div>') !!}

                            </div>
                        
<!-------------------------------------------------------------------->
                            
                            <div class="form-group">

                                <label for="subsidio" class="control-label">{{'Subsidio(s) por parte del gobierno'}}</label>

                                <select for="subsidio" class="form-control {{$errors->has('subsidio')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                                    name="subsidio" 
                                    id="subsidio" 
                                    tabindex="1" value="{{ isset($usuario->subsidio) ? $usuario->subsidio:old('subsidio') }}">
                                    <option disabled selected="">Elija una opción...</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                
                        
                                </select>
                                {!! $errors->first('subsidio','<div class="invalid-feedback">:message</div>') !!}

                            </div>
                               
<!-------------------------------------------------------------------->
                        
                            <div class="form-group">

                                <label for="tipo_subsidio" class="control-label">{{'Tipo de Subsidio'}}</label>

                                <select for="tipo_subsidio" class="form-control {{$errors->has('tipo_subsidio')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
                                    name="tipo_subsidio" 
                                    id="tipo_subsidio" 
                                    tabindex="1" value="{{ isset($usuario->tipo_subsidio) ? $usuario->tipo_subsidio:old('tipo_subsidio') }}">
                                    <option disabled selected="">Elija una opción...</option>
                                    <option value="Gobierno">Gobierno</option>
                                    <option value="Sector Privado">Sector Privado</option>
                                    <option value="No Aplica">No aplica</option>
                                
                                </select>
                                {!! $errors->first('tipo_documento','<div class="invalid-feedback">:message</div>') !!}

                            </div>
                                   

          <!-- -------------------------------   -------------------------------------------->
          
                <!-- <div class="form-group">
                    <label for="cual_subsidio" class="control-label">{{'Otro. Cual?'}}</label>

                   
                    <input type="text"  class="form-control {{$errors->has('cual_subsidio')? 'is-invalid':'' }}" 
                    name="cual_subsidio" 
                    id="cual_subsidio" 
                    value="{{ isset($usuario->cual_subsidio)?$usuario->cual_subsidio:old('cual_subsidio')}}" > 

                    {!! $errors->first('cual_subsidio','<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            <br/> -->
          <!-- -------------------------------   -------------------------------------------->
          
                <div class="form-group">
                    <label for="tiempo_libre" class="control-label">{{'Gustos Personales'}}</label>

                    <input type="text"  class="form-control {{$errors->has('tiempo_libre')? 'is-invalid':'' }}" 
                    name="tiempo_libre" 
                    id="tiempo_libre" 
                    value="{{ isset($usuario->tiempo_libre)?$usuario->tiempo_libre:old('tiempo_libre')}}">

                    {!! $errors->first('tiempo_libre','<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            <br/>
                         
</div>

<!-------------------------------------------------------------------------------------------->
<h3>UBICACIÓN GEOGRÁFICA DEL BENEFICIARIO(A)</h3>

<!-- <div class="form-group">
<label for="departamento" class="control-label">{{'Departamento'}}</label>

   <select for="departamento" class="form-control {{$errors->has('departamento')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
       name="departamento" 
       id="departamento" 
       tabindex="1" value="{{ isset($usuario->departamento) ? $usuario->departamento:old('departamento') }}">
       <option disabled selected="">Elija una opción...</option>
       <option value="Cundinamarca">Cundinamarca</option>

   </select>
   {!! $errors->first('departamento','<div class="invalid-feedback">:message</div>') !!}
  
<br/>        
</div>
</div> -->

<!------------------------------------------------------->
<!-- <div class="col-md-6">
<div class="form-group">
<label for="municipio" class="control-label">{{'Municipio'}}</label>

   <select for="municipio" class="form-control {{$errors->has('municipio')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
       name="municipio" 
       id="municipio" 
       tabindex="1" value="{{ isset($usuario->municipio) ? $usuario->municipio:old('municipio') }}">
       <option disabled selected="">Elija una opción...</option>
       <option value="La Vega">La Vega</option>

   </select>
   {!! $errors->first('municipio','<div class="invalid-feedback">:message</div>') !!}
  
<br/>        
</div>
</div> -->
<!------------------------------------------------------->

<div class="form-group">
<label for="zona_residencia" class="control-label ">{{'Zona Residencial'}}</label>

   <select for="zona_residencia" class="form-control {{$errors->has('zona_residencia')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
       name="zona_residencia" 
       id="zona_residencia" 
       tabindex="1" value="{{ isset($usuario->zona_residencia) ? $usuario->zona_residencia:old('zona_residencia') }}">
       <option disabled selected="">Elija una opción...</option>
       <option value="Urbana">Urbana</option>
       <option value="Rural">Rural</option>

   </select>
   {!! $errors->first('zona_residencia','<div class="invalid-feedback">:message</div>') !!}
<br/>        
</div>


<!-- -------------------------------   -------------------------------------------->

   <div class="form-group">
       <label for="direccion" class="control-label">{{'Dirección, Barrio o Vereda de Residencia'}}</label>
       <input type="text"  class="form-control {{$errors->has('direccion')? 'is-invalid':'' }}" name="direccion" id="direccion" 
       value="{{ isset($usuario->direccion)?$usuario->direccion:old('direccion')}}">

       {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
   </div>




<!-------------------------------------------------------------------------------------------->
<h3>DATOS DE CONTACTO DEL BENEFICIARIO(A)</h3>

<!-- -------------------------------   -------------------------------------------->


<!-------------------------------------> 

   <div class="form-group">
       <label for="telefono" class="control-label">{{'Teléfono'}}</label>
       <input type="text"  class="form-control {{$errors->has('telefono')? 'is-invalid':'' }}" name="telefono" id="telefono" 
       value="{{ isset($usuario->telefono)?$usuario->telefono:old('telefono')}}">

       {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
   </div>

<!--     


   <div class="form-group">
       <label for="telefono_movil" class="control-label">{{'Teléfono Móvil'}}</label>
       <input type="text"  class="form-control {{$errors->has('telefono_movil')? 'is-invalid':'' }}" name="telefono_movil" id="telefono_movil" placeholder="310 0000 000"
       value="{{ isset($usuario->telefono_movil)?$usuario->telefono_movil:old('telefono_movil')}}">

       {!! $errors->first('telefono_movil','<div class="invalid-feedback">:message</div>') !!}
   </div>


   <div class="form-group">
       <label for="correo" class="control-label">{{'Email'}}</label>
       <input type="text"  class="form-control {{$errors->has('correo')? 'is-invalid':'' }}" name="correo" id="correo" 
       value="{{ isset($usuario->correo)?$usuario->correo:old('correo')}}">

       {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}
   </div>
-->

<h3>DATOS DE CONTACTO DE PERSONA EN CASO DE EMERGENCIA</h3>


   <div class="form-group">
       <label for="nombre_contacto" class="control-label">{{'Nombre del contacto'}}</label>
       <input type="text"  class="form-control {{$errors->has('nombre_contacto')? 'is-invalid':'' }}" name="nombre_contacto" id="nombre_contacto" 
       value="{{ isset($usuario->nombre_contacto)?$usuario->nombre_contacto:old('nombre_contacto')}}">

       {!! $errors->first('nombre_contacto','<div class="invalid-feedback">:message</div>') !!}
   </div>



<!-------------------------------------> 

   <div class="form-group">
       <label for="telefono_parentesco" class="control-label">{{'Teléfono del contacto'}}</label>
       <input type="text"  class="form-control {{$errors->has('telefono_parentesco')? 'is-invalid':'' }}" name="telefono_parentesco" id="telefono_parentesco" 
       value="{{ isset($usuario->telefono_parentesco)?$usuario->telefono_parentesco:old('telefono_parentesco')}}">

       {!! $errors->first('telefono_parentesco','<div class="invalid-feedback">:message</div>') !!}
   </div>



<!-------------------------------------> 

   <div class="form-group">
       <label for="parentesco" class="control-label">{{'Parentesco'}}</label>
       <input type="text"  class="form-control {{$errors->has('parentesco')? 'is-invalid':'' }}" name="parentesco" id="parentesco" 
       value="{{ isset($usuario->parentesco)?$usuario->parentesco:old('parentesco')}}">

       {!! $errors->first('parentesco','<div class="invalid-feedback">:message</div>') !!}
   </div>



<!--------------------------------------------------------------------------->

<!-- 
<div class="form-group">
   <h3>ACTIVIDAD ECONÓMICA DEL BENEFICIARIO (A) </h3>

   <label for="actividad_principal" class="control-label">{{'ACTUALMENTE SU ACTIVIDAD PRINCIPAL ES: (Asigne una sola alternativa, la que mejor describa la actividad principal)'}}</label>

   <select for="actividad_principal" class="form-control {{$errors->has('actividad_principal')? 'is-invalid':'' }}" data-placeholder="Choose a Category" 
       name="actividad_principal" 
       id="actividad_principal" 
       tabindex="1" value="{{ isset($usuario->actividad_principal) ? $usuario->actividad_principal:old('actividad_principal') }}">
       <option disabled selected="">Elija una opción...</option>
       <option value="Buscando Trabajo">Buscando Trabajo</option>
       <option value="Trabajar">Trabajar</option>
       <option value="Estudiar">Estudiar</option>
       <option value="Obrero o empleado de empresa particular">Obrero o empleado de empresa particular</option>
       <option value="Obrero o empleado del gobierno">Obrero o empleado del gobierno</option>
       <option value="Empleado(a) doméstico">Empleado(a) doméstico</option>
       <option value="Trabajador familiar sin remuneración">Trabajador familiar sin remuneración</option>
       <option value="Trabajador sin remuneración en empresas o de negocios de otros hogares">Trabajador sin remuneración en empresas o de negocios de otros hogares</option>
       <option value="Oficios de hogar">Oficios de hogar</option>
       <option value="Incapacidad permanente para trabajar">Incapacidad permanente para trabajar</option>
       <option value="Jornalero o peón">Jornalero o peón</option>
       <option value="Trabajador independiente o por cuenta propia">Trabajador independiente o por cuenta propia</option>
       <option value="Patrón o empleador">Patrón o empleador</option>
       <option value="Otro">Otro</option>

   </select>
   {!! $errors->first('actividad_principal','<div class="invalid-feedback">:message</div>') !!}
  
       <br/>        
   </div>
 -->

<!-- -------------------------------   -------------------------------------------->
<h3>MODULO DE SEGUIMIENTO Y EVALUACIÓN  </h3>


<div class="form-group">
   <label for="expectativas" class="control-label">{{'¿Cuáles son las expectativas que usted tiene con ser beneficiario del centro vida o día?'}}</label>

   <input type="text"  class="form-control {{$errors->has('expectativas')? 'is-invalid':'' }}" 
   name="expectativas" 
   id="expectativas" 
   value="{{ isset($usuario->expectativas) ? $usuario->expectativas:old('expectativas')}}">

   {!! $errors->first('expectativas','<div class="invalid-feedback">:message</div>') !!}
</div>

<br/>         
<!--------------------------------------------------------------------------------------------------------------->


       <div class="form-group">
           <label for="condicion_medica" class="control-label">{{'Describa condiciones médicas especiales o que considera necesarias tener en cuenta.'}}</label>

           <input type="text"  class="form-control {{$errors->has('condicion_medica')? 'is-invalid':'' }}" 
           name="condicion_medica" 
           id="condicion_medica" 
           value="{{ isset($usuario->condicion_medica) ? $usuario->condicion_medica:old('condicion_medica')}}">

           {!! $errors->first('condicion_medica','<div class="invalid-feedback">:message</div>') !!}
       </div>
   
<br/>

<!-------------------------------------------------------------------------------------------->
<h3>INFORMACIÓN DE CONTROL DE LA ENCUESTA  </h3>

   <div class="form-group">
       <label for="fecha_ingreso" class="control-label">{{'Fecha de Ingreso'}}</label>
       <input type="date"  class="form-control {{$errors->has('fecha_ingreso')? 'is-invalid':'' }}" name="fecha_ingreso" id="fecha_ingreso" 
       value="{{ isset($usuario->fecha_ingreso) ? $usuario->fecha_ingreso:old('fecha_ingreso')}}">

       {!! $errors->first('fecha_ingreso','<div class="invalid-feedback">:message</div>') !!}
   </div>

<!-------------------------------------> 


       <div class="form-group">
           <label for="observaciones" class="control-label">{{'Observaciones'}}</label>

           <input type="text"  class="form-control {{$errors->has('observaciones')? 'is-invalid':'' }}" 
           name="observaciones" 
           id="observaciones" 
           value="{{ isset($usuario->observaciones) ? $usuario->observaciones:old('observaciones')}}"> 

           {!! $errors->first('observaciones','<div class="invalid-feedback">:message</div>') !!}
       </div>

<br/>
<!---------------------------------->

   <div class="form-group">
       <label for="nombre_funcionario" class="control-label">{{'Nombre del funcionario'}}</label>
       <input type="text"  class="form-control {{$errors->has('nombre_funcionario')? 'is-invalid':'' }}" name="nombre_funcionario" id="nombre_funcionario" 
       value="{{ isset($usuario->nombre_funcionario) ? $usuario->nombre_funcionario:old('nombre_funcionario')}}">

       {!! $errors->first('nombre_funcionario','<div class="invalid-feedback">:message</div>') !!}
   </div>

<!------------------------------------------------------->



<hr>
<input type="submit" class="btn btn-success" value="Modificar Usuario">

<a class="btn btn-primary" href="{{ url('usuarios') }}">Regresar</a>

</form>

</div>
@endsection
