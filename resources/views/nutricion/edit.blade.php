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

<form action="{{ url('/nutricion/'.$nutricion->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <h2>Nutrición Centro Día</h2>

    <div class="form-group">
            <label for="peso" class="control-label">{{'Peso (KG)'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <input type="text"  class="form-control  {{$errors->has('peso')?'is-invalid':'' }}" 
            name="peso" 
            id="peso" 

            value="{{ isset($nutricion->peso) ? $nutricion->peso:old('peso')}}">

            <!--{!! $errors->first('peso','<div class="invalid-feedback">:message</div>')    !!}-->

    </div>
<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="talla" class="control-label">{{'Talla'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->

            <input type="text"  class="form-control  {{$errors->has('talla')?'is-invalid':'' }}" 
            name="talla" 
            id="talla" 

            value="{{ isset($nutricion->talla) ? $nutricion->talla:old('talla')}}">

            <!--{!! $errors->first('peso','<div class="invalid-feedback">:message</div>')    !!}-->

    </div>
    <hr>
<!------------------------------------------------------------------------------------------------------------->   
<h4>Diagnóstico</h4>

<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="diagnostico" class="control-label ">{{'Diagnóstico De Peso (Sobrepeso, Obesidad, Delgadez)'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->
        
            <input type="text"  class="form-control  {{$errors->has('diagnostico')?'is-invalid':'' }}" 
            name="diagnostico" 
            id="diagnostico" 
            value="{{ isset($nutricion->diagnostico) ? $nutricion->diagnostico:old('diagnostico')}}">

            <!--{!! $errors->first('peso','<div class="invalid-feedback">:message</div>')    !!}-->

</div>

<!------------------------------------------------------------------------------------------------------------->
<div class="form-group">
            <label for="desnutricion" class="control-label">{{'Diagnóstico Nutricional (Desnutrición Aguda, Desnutrición Cronica, Desnutrición Global)'}}</label>
            <!--<span class="required" aria-required="true"> * </span>-->
            <input type="text"  class="form-control  {{$errors->has('desnutricion')?'is-invalid':'' }}" 
            name="desnutricion" 
            id="desnutricion" 

            value="{{ isset($nutricion->desnutricion) ? $nutricion->desnutricion:old('desnutricion') }}">

    </div>
<!------------------------------------------------------------------------------------------------------------->
    <hr>

    <center>
    <input type="submit" class="btn btn-primary" value="Modificar">
    <a class="btn btn-success" href="{{ url('nutricion') }}">Regresar</a>
    </center>

</form>
@endsection