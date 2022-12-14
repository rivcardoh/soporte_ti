@extends('adminlte::page')
@section('title', 'Area')
@section('content_header')
<h1>ÁREAS</h1>
@stop
@section('content')
@include('area/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nueva área</button>
    </div>
    <div class="card-body">
        <table id="areas" class="table table-striped table-bordered" style="width:100%">
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
                @foreach($areas as $area)
                <tr>
                    <td>{{$area->id}}</td>
                    <td>{{$area->nombre}}</td>
                    <td>{{$area->created_at}}</td>
                    <td>{{$area->updated_at}}</td>
                    <td>
                        @if($area->estado==1)
                        <nobr><button href="{{route('area.edit', $area->id)}}" data-toggle="modal"
                                data-target="#editModal{{ $area->id }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <a href="{{route('area.destroy', $area->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($area->estado==0)
                            <a href="{{route('area.destroy', $area->id)}}"
                                class="btn btn-outline-warning btn-sm" title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                            Desactivado</a>
                            @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('area/modalEdit')
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
    $('#areas').DataTable();
});
</script>
@stop