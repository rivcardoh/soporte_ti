@extends('adminlte::page')
@section('title', 'Personas')
@section('content_header')
<h1>Personas</h1>
@stop
@section('content')
@if(session('mensaje'))
<div class="alert alert-success" role="alert">
    <strong>{{session('mensaje')}}</strong>
</div>
@elseif(session('registro'))
<div class="alert alert-success" role="alert">
    <strong>{{session('registro')}}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <a href="{{route('persona.create')}}" class="btn btn-primary">Nueva persona</a>
    </div>
    <div class="card-body">
        <table id="personas" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CI</th>
                    <th>CELULAR</th>
                    <th>FECHA CREADO</th>
                    <th>FECHA DE ACTUALIZACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->id}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido}}</td>
                    <td>{{$persona->ci}}</td>
                    <td>{{$persona->celular}}</td>
                    <td>{{$persona->created_at}}</td>
                    <td>{{$persona->updated_at}}</td>
                    <td>
                            @if($persona->estado==1)
                            <nobr><a href="{{route('persona.edit', $persona->id)}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <a href="{{route('persona.destroy', $persona->id)}}" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($persona->estado==0)
                            <a href="{{route('persona.destroy', $persona->id)}}" class="btn btn-outline-warning btn-sm" title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                            Desactivado</a>
                            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('css')
@stop
@section('js')
<script>
$(document).ready(function() {
    $('#personas').DataTable();
});
</script>
@stop