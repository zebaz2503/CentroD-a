@extends('layouts.app')

@section('content')
<div class="container">

<div align="center" class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <div class="card-header">|ESGAC|</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenido {{ Auth::user()->name }}</h1>
                    <a href="{{ url('usuarios') }}" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
</div>
@endsection

