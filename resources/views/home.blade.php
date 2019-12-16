@extends('layouts.app')

@section('content')
<div class="container">
    <center>
    <img class="login-logo" src="{{ asset('css/LOGO.png') }}" width="250" height="150" />
    </center>
    <br>

<div align="center" class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <div class="card-header">|ESE Hospital de La Vega|</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenido {{ Auth::user()->name }}</h1>
                    <a href="{{ url('pacientes') }}" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
</div>
@endsection
