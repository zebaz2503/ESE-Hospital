@extends('layouts.app')

@section('content')

<div class="container">
<center>
    <img class="login-logo" src="{{ asset('css/LOGO.png') }}" width="150" height="100" />
</center>
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
            <div class="form-inline float-sm-left">
            <a href="{{ url('pacientes/create') }}" class="btn btn-primary">Agregar Paciente +</a>
                  <br/>
            </div> 
</div> 
<br/>

<form class="form-inline float-sm-right">
<a href="{{ route('exportar') }}" class="btn btn-success" >Descargar Registro</a>
</form>
<br>
<br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>No Cedula</th>
            <th>EPS</th>
            <th>Especialidad</th>
            <th>Medico</th>
            <th>Fecha</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $paciente->nombre_paciente }}</td>
            <td>{{ $paciente->cedula }}</td>
            <td>{{ $paciente->eps }}</td>
            <td>{{ $paciente->especialidad }}</td>
            <td>{{ $paciente->medico }}</td>
            <td>{{ $paciente->created_at}}</td>
            <td>
            <a class="btn btn-warning"   href="{{ url('/pacientes/'.$paciente->id.'/edit' )}}">
            Editar
            </a>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $pacientes->links() }}



</div>


@endsection



