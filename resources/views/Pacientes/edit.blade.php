@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/pacientes/'. $paciente->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <center>
    <img class="login-logo" src="{{ asset('css/LOGO.png') }}" width="150" height="100" />
    <br>
    <br>
    <b><h3>Seguimiento Bitácora de Referencia</h3></b>
    </center>
    <br>

    <br>





    <div class="form-group">
            <div class="form-row">
            <label for="nombre_paciente" class="control-label"><b>{{ 'Nombre del Paciente' }}</b></label>
            <input type="text" class="form-control" name="nombre_paciente" id="nombre_paciente" value="{{ $paciente->nombre_paciente }}" readonly>
    </div>
    </div>

    <div class="form-group">
            <div class="form-row"> 
            <div class="form-group col-md-6">
                <label for="cedula" class="control-label"><b>{{ 'Cedula' }}</b></label>
                <input type="text" class="form-control" name="cedula" id="cedula" value="{{ $paciente->cedula }}" readonly>
            </div>   
                    
            <div class="form-group col-md-2">
                <label for="edad" class="control-label"><b>{{ 'Edad' }}</b></label>
                <input type="text" class="form-control" name="edad" id="edad" value="{{ $paciente->edad }} Años" readonly> 
            </div>   
                    
            <div class="form-group col-md-4">
                <label for="eps"><b>{{ 'EPS' }}</b></label>
                <input type="text" class="form-control" name="eps" id="eps" value="{{ $paciente->eps }}" readonly>                  
            </div>       

    </div>
    </div>


    <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="acompanante"><b>{{ 'Acompañante' }}</b></label>
                    <input type="text" class="form-control" name="acompanante" id="acompanante" value="{{ $paciente->acompanante }}" readonly>  
                </div>
                <div class="form-group col-md-6">
                    <label for="tel"><b>{{ 'Telefono' }}</b></label>
                    <input type="text" class="form-control" name="tel" id="tel" value="{{ $paciente->tel }}" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="especialidad"><b>{{ 'Especialidad' }}</b></label>
                    <input type="text"  class="form-control" name="especialidad" id="especialidad" value="{{ $paciente->especialidad }}" readonly>       
                </div>
                <div class="form-group col-md-6">
                    <label for="codigo_cie"><b>{{ 'Codigo CIE 10' }}</b></label>
                    <input type="text" class="form-control" name="codigo_cie" id="codigo_cie" value="{{ $paciente->codigo_cie }}" readonly>    
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diagnostico"><b>{{ 'Diagnostico' }}</b></label>
                    <input type="text" class="form-control" name="diagnostico" id="diagnostico" value="{{ $paciente->diagnostico }}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="medico"><b>{{ 'Medico' }}</b></label>
                    <input type="text" class="form-control" name="medico" id="medico" value="{{ $paciente->medico }}" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom_familia"><b>{{ 'Nombre del Familiar' }}</b></label>
                    <input type="text" class="form-control" name="nom_familia" id="nom_familia" value="{{ $paciente->nom_familia }}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="enfermero"><b>{{ 'Enfermero' }}</b></label>
                    <input type="text" class="form-control" name="enfermero" id="enfermero" value="{{ $paciente->enfermero }}" readonly>
                </div>
            </div>

            <label for="descrip"><b></b>{{ 'Descripcion' }}</label>
            <input type="text" class="form-control" name="descrip" id="descrip" value="{{ $paciente->descrip }}">

    <br>
    <input type="submit" class="btn btn-primary" value="Modificar">

    <a href="{{ url('pacientes') }}" class="btn btn-warning">Regresar</a>

    </form>

</div>

@endsection




