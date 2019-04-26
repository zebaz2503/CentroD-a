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

@include('usuarios.form', ['Modo'=>'editar'])

<!--<label for="primer_nombre">{{'Primer Nombre'}}</label>
<input type="text" name="primer_nombre" id="primer_nombre" value="{{ $usuario->primer_nombre}}">
<br/>


<label for="segundo_nombre">{{'Segundo Nombre'}}</label>
<input type="text" name="segundo_nombre" id="segundo_nombre" value="{{ $usuario->segundo_nombre}}">
<br/>


<label for="primer_apellido">{{'Primer Apellido'}}</label>
<input type="text" name="primer_apellido" id="primer_apellido" value="{{ $usuario->primer_apellido}}">
<br/>


<label for="segundo_apellido">{{'Segundo Apellido'}}</label>
<input type="text" name="segundo_apellido" id="segundo_apellido" value="{{ $usuario->segundo_apellido}}">
<br/>


<label for="foto">{{'Foto'}}</label>
<br/>
<img src="{{ asset('storage').'/'.$usuario->foto}}" alt="" width="200">
<br/>
<input type="file" name="foto" id="foto" value="{{ $usuario->foto}}">
<br/>
-- -------------------------------   -------------------------------

<label for="tipo_documento">{{'Tipo de Documento'}}</label>
<input type="text" name="tipo_documento" id="tipo_documento" value="{{ $usuario->tipo_documento}}">
<br/>
 -------------------------------   ---------------------------------------

<label for="fecha_nacimiento">{{'Fecha de Nacimiento'}}</label>
<input type="text" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento}}">
<br/>
 -------------------------------   ------------------------------------------

<label for="numero_documento">{{'Numero de Documento'}}</label>
<input type="text" name="numero_documento" id="numero_documento" value="{{ $usuario->numero_documento}}">
<br/>




<input type="submit" value="Modificar">
<br/>

<a href="{{ url('usuarios') }}">Regresar</a>
-->

</form>

</div>
@endsection
