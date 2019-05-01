@extends('layouts.app')

@section('content')
<div class="container">


<center>
<img class="login-logo" src="{{ asset('css/escudo.png') }}" />
<img class="login-logo" src="{{ asset('css/logos.png') }}" width="450" height="100" />
</center>
<br>

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{Session::get('Mensaje') }}
</div>

@endif
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
</nav>
<br> 

<!----------------------------------------------------------METODO DE BUSCAR------------------------------------------------->
  <div class="panel-body">
      <form class="form-inline float-sm-right">
        {!! Form::open(array('url' => '/canes/', 'method' => 'GET', 'class'=> 'btn btn-outline-primary', 'role'=>'search')) !!}
                    
          <div class="form-group">  
            {!! Form::date('name', null, ['class'=> 'form-control', 'placeholder'=> 'Buscar por fecha']) !!}                 
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </div>
      </form>
        {!! Form::close() !!}
  </div>
               
<!----------------------------------------------------------------------------------------------------------->

  <div class="row">
      <div class="col-md-6">
           <a href="{{ url('nutricion/create') }}" class="btn btn-primary">Agregar Nutrición +</a>
           <br/>
           <br/>
      </div> 
  </div> 


<br/>
                  
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
          <th style="text-align: center">#</th>
          <th style="text-align: center">ID Usuario</th>
          <th style="text-align: center">Fecha de Registro</th>                     
          <th style="text-align: center">Acciones</th>

        </tr>
    </thead>

    <tbody>
          @foreach($nutricion as $nutrir) <!--variable unica para mostrar-->
            <tr>
                <td align="center"> {{$loop->iteration}}</td>
                <td align="center"> {{ $nutrir->id_usuario}} </td>
                <td align="center"> {{ $nutrir->created_at->format('d/m/Y')}} </td><!--tener cuidado con el nombre en la tabla de base de datos-->
                
                <td align="center">                               
                <a class="btn btn-warning"   href="{{ url('/nutricion/'.$nutrir->id.'/edit' )}}">Editar</a>

                <form method="post" action="{{ url('/nutricion/'.$nutrir->id)  }}" style="display:inline">
                {{csrf_field()}}
                {{method_field('DELETE')}}

                <button class="btn btn-danger"type="submit" onclick="return confirm('Borrar?');">Borrar</button>
                </td>
            </tr>
                          @endforeach   
      </tbody>
</table>
{{ $nutricion-> links ()}}

</div>

@endsection