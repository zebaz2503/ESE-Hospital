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


    <form action="{{ url('/pacientes')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <center>
            <img  src="{{ asset('css/LOGO.png') }}" width="150" height="100" />
            <br>
            <br>
            <b><h3>Registro Bitácora de Referencia</h3></b>
        </center>

        <br>

        <br>
        <h4>Datos de Identificación del Paciente</h4>
        <br/>


        <div class="form-group">
            <div class="form-row">
                <label for="nombre_paciente" class="control-label"><b>{{ 'Nombre del Paciente' }}</b></label>
                <input type="text" class="form-control {{$errors->has('nombre_paciente')? 'is-invalid':'' }}"  name="nombre_paciente" id="nombre_paciente" 
                value="{{ isset($paciente->nombre_paciente)?$paciente->nombre_paciente:old('nombre_paciente')}}">
                {!! $errors->first('nombre_paciente','<div class="invalid-feedback">:message</div>') !!}
        </div>

        </div>

            <div class="form-group">
            <div class="form-row"> 
                    <div class="form-group col-md-6">
                        <label for="cedula"><b>{{ 'Cedula' }}</b></label>
                        <input type="text" class="form-control {{$errors->has('cedula')? 'is-invalid':'' }}" name="cedula" id="cedula" 
                        value="{{ isset($paciente->cedula)?$paciente->cedula:old('cedula')}}">
                        {!! $errors->first('cedula','<div class="invalid-feedback">:message</div>') !!}
                    </div>   
                    
                    <div class="form-group col-md-2">
                        <label for="edad"><b>{{ 'Edad' }}</b></label>
                        <input type="text" class="form-control {{$errors->has('edad')? 'is-invalid':'' }}" name="edad" id="edad" 
                        value="{{ isset($paciente->edad)?$paciente->edad:old('edad')}}">
                        {!! $errors->first('edad','<div class="invalid-feedback">:message</div>') !!}
                    </div>   
                    
                    <div class="form-group col-md-4">
                        <label for="eps"><b>{{ 'EPS' }}</b></label>
                        <input type="text" class="form-control {{$errors->has('eps')? 'is-invalid':'' }}" name="eps" id="eps" 
                        value="{{ isset($paciente->eps)?$paciente->eps:old('eps')}}">
                        {!! $errors->first('eps','<div class="invalid-feedback">:message</div>') !!}
                        
            </div>       

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    
                    <label for="acompanante"><b>{{ 'Acompañante' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('acompanante')? 'is-invalid':'' }}" name="acompanante" id="acompanante" 
                    value="{{ isset($paciente->acompanante)?$paciente->acompanante:old('acompanante')}}">
                    {!! $errors->first('acompanante','<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col-md-6">
                    
                    <label for="tel"><b>{{ 'Telefono' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('tel')? 'is-invalid':'' }}" name="tel" id="tel" 
                    value="{{ isset($paciente->tel)?$paciente->tel:old('tel')}}">
                    {!! $errors->first('tel','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    
                    <label for="especialidad"><b>{{ 'Especialidad' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('especialidad')? 'is-invalid':'' }}" name="especialidad" id="especialidad" 
                    value="{{ isset($paciente->especialidad)?$paciente->especialidad:old('especialidad')}}">
                    {!! $errors->first('especialidad','<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group col-md-6">
                    
                    <label for="codigo_cie"><b>{{ 'Codigo CIE 10' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('codigo_cie')? 'is-invalid':'' }}" name="codigo_cie" id="codigo_cie" 
                    value="{{ isset($paciente->codigo_cie)?$paciente->codigo_cie:old('codigo_cie')}}">
                    {!! $errors->first('codigo_cie','<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diagnostico"><b>{{ 'Diagnostico' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('diagnostico')? 'is-invalid':'' }}" name="diagnostico" id="diagnostico" 
                    value="{{ isset($paciente->diagnostico)?$paciente->diagnostico:old('diagnostico')}}">
                    {!! $errors->first('diagnostico','<div class="invalid-feedback">:message</div>') !!}  
                </div>
                <div class="form-group col-md-6">
                    <label for="medico"><b>{{ 'Medico Que Remite' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('medico')? 'is-invalid':'' }}" name="medico" id="medico" 
                    value="{{ isset($paciente->medico)?$paciente->medico:old('medico')}}">
                    {!! $errors->first('medico','<div class="invalid-feedback">:message</div>') !!} 
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom_familia"><b>{{ 'Nombre del Familiar' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('nom_familia')? 'is-invalid':'' }}" name="nom_familia" id="nom_familia" 
                    value="{{ isset($paciente->nom_familia)?$paciente->nom_familia:old('nom_familia')}}">
                    {!! $errors->first('nom_familia','<div class="invalid-feedback">:message</div>') !!} 
                </div>
                <div class="form-group col-md-6">
                    <label for="enfermero"><b>{{ 'Enfermero' }}</b></label>
                    <input type="text" class="form-control {{$errors->has('enfermero')? 'is-invalid':'' }}" name="enfermero" id="enfermero" 
                    value="{{ isset($paciente->enfermero)?$paciente->enfermero:old('enfermero')}}">
                    {!! $errors->first('enfermero','<div class="invalid-feedback">:message</div>') !!} 
                </div>
            </div>


            <label for="descrip"><b>{{ 'Descripcion' }}</b></label>
            <!--<input type="textarea" name="descrip" id="descrip" class="form-control {{$errors->has('descrip')? 'is-invalid':'' }}" 
            value="{{ isset($paciente->descrip)?$paciente->descrip:old('descrip')}}">
           
            {!! $errors->first('descrip','<div class="invalid-feedback">:message</div>') !!} -->

            <center>
            <textarea name="descrip" id="descrip" cols="120" rows="6" class="form-control {{$errors->has('descrip')? 'is-invalid':'' }}" 
            value="{{ isset($paciente->descrip)?$paciente->descrip:old('descrip')}}"></textarea>
            {!! $errors->first('descrip','<div class="invalid-feedback">:message</div>') !!} 
            </center>

            <br>
            <input type="submit" class="btn btn-primary" value="Agregar Paciente">
            <a href="{{ url('pacientes') }}" class="btn btn-warning">Regresar</a>  


            </div>
        </div> 
        <br>
 
    </form>
</div>    
@endsection
