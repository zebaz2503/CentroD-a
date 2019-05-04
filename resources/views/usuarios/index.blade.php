@extends('layouts.app')

@section('content')

<div class="container">
<center>
<img class="login-logo" src="{{ asset('css/LOGO.jpg') }}" width="480" height="150" />
</center>
<br>


<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="{{url('usuarios') }}">Usuarios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('nutricion') }}">Nutrición</a>
  </li>
</ul>
<a href="{{ route('exportar') }}" class="btn btn-success" >Descargar Registro</a>
</nav>
<br>
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{Session::get('Mensaje') }}
</div>

@endif

                  <!----------------------------------------------------------METODO DE BUSCAR------------------------------------------------->
                  <div class="panel-body">
                    <form class="form-inline float-sm-right">
                    {!! Form::open(array('url' => '/canes/', 'method' => 'GET', 'class'=> 'btn btn-outline-primary', 'role'=>'search')) !!}
                    
                      <div class="form-group">  
                      {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=> 'Buscar']) !!}                 
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                      </div>
                    </form>
                    {!! Form::close() !!}
                  </div>
               
                  <!----------------------------------------------------------------------------------------------------------->
                  
          <div class="row">
            <div class="col-md-6">
                  <a href="{{ url('usuarios/create') }}" class="btn btn-primary">Agregar Usuario +</a>
                  <br/>
                  <br/>


              </div> 
            </div> 


                  <br/>
                  

                  <table class="table table-light table-hover">
                          <thead class="thead-light">
                              <tr>
                                  <th>#</th>
                                  <th>Foto</th>
                                  <th>Nombre</th>
                                  <th>Tipo de Documento</th>
                                  <th>Fecha de Nacimiento</th>
                                  <th>Numero de Documento</th>
                                  
                                  <th>Acciones</th>

                              </tr>
                          </thead>
                          
                          <tbody>
                          @foreach($usuarios as $usuario) <!--variable unica para mostrar-->
                              <tr>
                                  <td>{{$loop->iteration}}</td>

                                  
                                  <td>
                                  
                                  <img src="{{ asset('storage').'/'.$usuario->foto}}" class="img-thumbnail img-fluid" alt="" width="100">
                              
                                  </td>
                                  <td>{{ $usuario->primer_nombre}}  {{ $usuario->primer_apellido}} </td><!--tener cuidado con el nombre en la tabla de base de datos-->
                                  <td>{{ $usuario->tipo_documento}}</td>
                                  <td>{{ $usuario->fecha_nacimiento}}</td>
                                  <td>{{ $usuario->numero_documento}}</td>
                                  <td>
                                  
                                  <a class="btn btn-warning"   href="{{ url('/usuarios/'.$usuario->id.'/edit' )}}">Editar
                                  </a>
                                  

                                  <form method="post" action="{{ url('/usuarios/'.$usuario->id)  }}" style="display:inline">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}

                                  <button class="btn btn-danger"type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                                  </form>
                                  <a href="{{ url('/usuarios/' .$usuario-> id) }}" id="sample_editable_1_new" class="btn btn-success">
                                    Ver 
                                  </a>
                                  
                                  
                                  
                                  
                                  </td>
                              </tr>
                          @endforeach   
                          </tbody>
                  </table>

                  {{ $usuarios-> links ()}}

                  </div>

                  @endsection
