@extends('layouts.app')
@section('content')

<div class="container">
<center>
<img class="login-logo" src="{{ asset('css/LOGO.jpg') }}" width="480" height="150" />
</center>

<div class="portlet-body form">
<div class="row">
    <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">  
        <a href="{{ url('/usuarios/') }}" id="sample_editable_1_new" class="btn btn-primary">Regresar</a>  
        <br>   
        <br>
            <div class="form-body">
                <h1 class="form-section">Usuario # {{ $usuario->id}} : {{ $usuario-> primer_nombre}} {{ $usuario-> primer_apellido}}</h1>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                                                            
                                <img  src="{{ asset('storage').'/' .$usuario->foto}}" class="img-thumbnail img-fluid" alt=""  width="150">
                                                                                
                            </div>                                                
                        </div>
            </div> 
        </form> 
    </div>    
</div>          


        <!------------------------------------------------------------------->
        <h4>IDENTIFICACIÓN BÁSICA DEL BENEFICIARIO(A)</h4>
        <div class="portlet light bordered">
            <div class="row">
                      
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Tipo de Documento</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> tipo_documento}}" name="tipo_documento" readonly>
                                                                     
                    </div>
                </div>   
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Fecha de Nacimiento</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> fecha_nacimiento}}" name="fecha_nacimiento" readonly>
                                                                     
                    </div>
                </div>   
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Numero de Documento</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> numero_documento}}" name="numero_documento" readonly>
                                                                     
                    </div>
                </div>   
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Edad</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> edad}}" name="edad" readonly>
                                                                     
                    </div>
                </div>   
    </div>
</div>     
<hr>           
        <!------------------------------------------------------------------->
<div class="portlet light bordered">
        <div class="row">
 
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Sisben</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> sisben}}" name="Sisben" readonly>
                                                                     
                    </div>
                </div>   
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Puntaje Sisben</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control "  type="text" value="{{ $usuario-> puntaje_sisben}}" name="puntaje_sisben" readonly>
                                                                     
                    </div>
                </div>       
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Genero</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> sexo}}" name="sexo" readonly>
                                                                     
                    </div>
                </div> 
          <br>
          <br>      
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Afiliación EPS</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> afiliacion_eps}}" name="afiliacion_eps" readonly>
                                                                     
                    </div>
                </div>
         <!------------------------------------------------------------------->
         <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Estado EPS</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> estado_eps}}" name="estado_eps" readonly>
                                                                     
                    </div>
                </div>
          <!------------------------------------------------------------------->
          <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Nombre EPS</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> nombre_eps}}" name="nombre_eps" readonly>
                                                                     
                    </div>
                </div>

      </div>
</div>           
<hr>                        

<!-------------------------------------------------------------------------------------->
<div class="portlet light bordered">
        <div class="row">
 
                <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Condición Poblacional</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> condicion_poblacion}}" name="condicion_poblacion" readonly>
                                                                     
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Nivel Educativo</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> nivel_educativo}}" name="nivel_educativo" readonly>
                                                                     
                    </div>
                </div>

        </div>
</div>
<hr>


<div class="portlet light bordered">
        <div class="row">

        <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Organización</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> organizacion_asociacion}}" name="organizacion_asociacion" readonly>
                                                                     
                    </div>
                </div>

<!--------------------------------------------------------------------->

                <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Tipo De Subsidio</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> subsidio}}" name="subsidio" readonly>
                                                                     
                    </div>
                </div>
<!--------------------------------------------------------------------->

                <div class="col-md-6">
                    <div class="form-group">
                                                                                                                                    
                            <label class="control-label text-primary">Subsidio</label>
                        
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> cual_subsidio}}" name="cual_subsidio" readonly>
                                                                     
                    </div>
                </div>
<!--------------------------------------------------------------------->
                <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Tiempo Libre</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> tiempo_libre}}" name="tiempo_libre" readonly>                                          
                    </div>
                </div>

            </div>
    </div>
<hr>
<h4>UBICACIÓN GEOGRÁFICA DEL BENEFICIARIO(A)</h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Departamento</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> departamento}}" name="departamento" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Municipio</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> municipio}}" name="municipio" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Zona Residencial</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> zona_residencia}}" name="zona_residencial" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Dirección</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> direccion}}" name="direccion" readonly>                                          
                    </div>
                </div>
        </div>
</div> 
<hr>
<h4>DATOS DE CONTACTO DEL BENEFICIARIO(A)</h4>

<div class="portlet light bordered">
        <div class="row">

            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Teléfono</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> telefono}}" name="telefono" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Teléfono Movil</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> telefono_movil}}" name="telefono_movil" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Email</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> correo}}" name="correo" readonly>                                          
                    </div>
                </div>

        </div>
</div>   
<hr>
<h4>DATOS DE CONTACTO DE PERSONA EN CASO DE EMERGENCIA</h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Nombre del Contacto</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> nombre_contacto}}" name="nombre_contacto" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Teléfono del Contacto</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> nombre_contacto}}" name="telefono_parentesco" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Parentesco</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> parentesco}}" name="parentesco" readonly>                                          
                    </div>
                </div>
        </div>
</div>
<hr>
<h4>ACTIVIDAD ECONÓMICA DEL BENEFICIARIO (A)</h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Actividad Principal</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> actividad_principal}}" name="actividad_principal" readonly>                                          
                    </div>
                </div>
        </div>
</div>
<hr>
<h4>MODULO DE SEGUIMIENTO Y EVALUACIÓN </h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Expectativas con Centro Día</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <textarea class="form-control"  type="text" value="" name="expectativas" readonly> {{ $usuario-> expectativas}}</textarea>                                         
                    </div>
                </div>

        </div>
</div>
<hr>
<h4>CONDICIONES MEDICAS ESPECIALES O QUE CONSIDERA NECESARIAS TENER EN CUENTA</h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Condiciones Medicas</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <textarea class="form-control"  type="text" value="" name="condicion_medica" readonly> {{ $usuario-> condicion_medica}} </textarea>                                        
                    </div>
                </div>
        </div>
</div>
<hr>
<h4>INFORMACIÓN DE CONTROL DE LA ENCUESTA</h4>

<div class="portlet light bordered">
        <div class="row">
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Fecha De Ingreso</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> fecha_ingreso}}" name="fecha_ingreso" readonly>                                          
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Observaciones</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <textarea class="form-control"  type="text" value="" name="observaciones" readonly> {{ $usuario-> observaciones}} </textarea>                                        
                    </div>
                </div>
            <!--------------------------------------------------------------------->
            <div class="col-md-6">
                    <div class="form-group">                                                                                                        
                            <label class="control-label text-primary">Funcionario Centro Día</label>
                            <!-- <p class="form-control-static"> {{ $usuario-> primer_nombre}} </p> -->
                            <input class="form-control"  type="text" value="{{ $usuario-> nombre_funcionario}}" name="nombre_funcionario" readonly>                                          
                    </div>
                </div>
                
                

        </div>
</div>
<hr>
 <!------------------------------------------------------------------------------------------>
 <nav class="navbar navbar-dark bg-primary">
  <h4>Diagnóstico Nutricional</h4>
</nav>

 <table class="table table-striped table-hover table-bordered dataTable no-footer">
                <thead class="thead-light">
                    <tr>
                    <th style="text-align: center">#</th>
                    <th style="text-align: center">Peso (Kg)</th>
                    <th style="text-align: center">Talla</th>
                    <th style="text-align: center">Diagnóstico por Peso</th>
                    <th style="text-align: center">Diagnóstico por Nutrición</th>
                    <th style="text-align: center">Fecha de Diagnóstico</th>
                    </tr>
                </thead>


                <tbody>
                @foreach ($nutricion as $nutrir) <!--variable unica para mostrar-->
                    <tr>
                    <td align="center">{{$loop->iteration}}</td>
                    
                    <td align="center">{{ $nutrir->peso}} Kg</th><!--tener cuidado con el nombre en la tabla de base de datos-->
                    <td align="center">{{ $nutrir->talla}}</th>
                    <td align="center">{{ $nutrir->diagnostico}}</th>
                    <td align="center">{{ $nutrir->desnutricion}}</th>
                    <td align="center">{{ $nutrir->created_at->format('d/m/Y')}}</th>
                                    <!-------------------------------->
                                        
                
                @endforeach
                </tbody>
            </table>
                <center><a href="{{ url('/usuarios/') }}" id="sample_editable_1_new" class="btn btn-primary">Regresar</a> </center>

</div>
@endsection
