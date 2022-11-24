@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Regionales</h1>
@stop
@section('content')
@include('regional/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo regional</button>
    </div>
    <div class="card-body">
        <table id="regionales" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>FECHA CREADO</th>
                    <th>FECHA DE ACTUALIZACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($regionales as $regional)
                <tr>
                    <td>{{$regional->id}}</td>
                    <td>{{$regional->nombre}}</td>
                    <td>{{$regional->created_at}}</td>
                    <td>{{$regional->updated_at}}</td>
                    <td>
                            @if($regional->estado==1)
                            <nobr><button href="{{route('regional.edit', $regional->id)}}"  data-toggle="modal"
                                data-target="#editModal{{ $regional->id }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <a href="{{route('regional.destroy', $regional->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($regional->estado==0)
                            <a href="{{route('regional.destroy', $regional->id)}}"
                            class="btn btn-outline-warning btn-sm" title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                            Desactivado</a>
                            @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('regional/modalEdit')
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
$(document).ready(function() {
    $('#regionales').DataTable();
});
</script>
@stop