@extends('adminlte::page')
@section('title', 'Personas')
@section('content_header')
<h1>Personas</h1>
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary">Nueva persona</a>
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
                        <nobr><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button><button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button></nobr>
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