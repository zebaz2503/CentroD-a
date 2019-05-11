@extends('layouts.app')

@section('content')
<div class="container">

<center>
<img class="login-logo" src="{{ asset('css/LOGO.jpg') }}" width="480" height="150" />
</center>

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

<form action="{{ route('nutricion.store') }}"  class="form-horizontal" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}


    <h2>Nutrición Centro Día</h2>

    <div class="form-group">
            <label for="peso" class="control-label">{{'Peso (KG)'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <input type="text"  class="form-control  {{$errors->has('peso')?'is-invalid':'' }}" 
            name="peso" 
            id="peso" 

            value="{{ isset($nutricion->peso)}}">

            {!! $errors->first('peso','<div class="invalid-feedback">:message</div>')    !!}

    </div>
<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="talla" class="control-label">{{'Talla'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <input type="text"  class="form-control  {{$errors->has('talla')?'is-invalid':'' }}" 
            name="talla" 
            id="talla" 

            value="{{ isset($nutricion->talla)}}">

            {!! $errors->first('talla','<div class="invalid-feedback">:message</div>')    !!}

    </div>
    <hr>
<!------------------------------------------------------------------------------------------------------------->   
<h4>Diagnóstico</h4>

<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="diagnostico" class="control-label ">{{'Diagnóstico De Peso'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->
            
            <select for="diagnostico" class="form-control {{$errors->has('diagnostico')?'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="diagnostico" 
                        id="diagnostico" 
                        tabindex="1" value="{{ isset($nutricion->diagnostico)}}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="SobrePeso">Sobrepeso</option>
                        <option value="Obesidad">Obesidad</option>
                        <option value="Delgades">Delgadez</option>
 
            </select>


            {!! $errors->first('diagnostico','<div class="invalid-feedback">:message</div>')    !!}

</div>

<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="desnutricion" class="control-label">{{'Diagnóstico Nutricional'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <select for="desnutricion" class="form-control {{$errors->has('desnutricion')?'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="desnutricion" 
                        id="desnutricion" 
                        tabindex="1" value="{{ isset($nutricion->desnutricion)}}">
                        <option disabled selected="">Elija una opción...</option>
                        <option value="Desnutricion Aguda">Desnutrición Aguda</option>
                        <option value="Desnutricion Cronica">Desnutrición Cronica</option>
                        <option value="Desnutricion Global">Desnutrición Global</option>
 
            </select>


            {!! $errors->first('desnutricion','<div class="invalid-feedback">:message</div>')    !!}

    </div>
<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="id_usuario" class="control-label">{{'Usuario Centro Día'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <select for="id_usuario" class="form-control {{$errors->has('id_usuario')?'is-invalid':'' }}" data-placeholder="Choose a Category" 
                        name="id_usuario" 
                        id="id_usuario" 
                        tabindex="1" value="{{ isset($nutricion->id_usuario)}}">
                        <option disabled selected="">Elija una opción...</option>
                        @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id}}">{{ $usuario->primer_nombre}} {{ $usuario->primer_apellido}}</option>
                        @endforeach
 
            </select>

    </div>
   <!----> 

    <hr>

    <center>
    <input type="submit" class="btn btn-primary" value="Registrar">
    <a class="btn btn-success" href="{{ url('nutricion') }}">Regresar</a>
    </center>

</form>
@endsection