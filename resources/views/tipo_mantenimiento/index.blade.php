@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Tipo de mantenimientos</h1>
@stop
@section('content')
@include('tipo_mantenimiento/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo tipo
            mantenimiento</button>
    </div>
    <div class="card-body">
        <table id="sareas" class="table table-striped table-bordered" style="width:100%">
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
                @foreach($tmantenimientos as $tmantenimiento)
                <tr>
                    <td>{{$tmantenimiento->id}}</td>
                    <td>{{$tmantenimiento->nombre}}</td>
                    <td>{{$tmantenimiento->created_at}}</td>
                    <td>{{$tmantenimiento->updated_at}}</td>
                    <td>
                        <nobr>
                            @if($tmantenimiento->estado==1)
                            <button href="{{route('tipo_mantenimiento.edit', $tmantenimiento->id)}}"
                                data-toggle="modal" data-target="#editModal{{ $tmantenimiento->id }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <a href="{{route('tipo_mantenimiento.destroy', $tmantenimiento->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($tmantenimiento->estado==0)
                            <a href="{{route('tipo_mantenimiento.destroy', $tmantenimiento->id)}}"
                                class="btn btn-outline-warning btn-sm" title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                                Desactivado</a>
                            @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('tipo_mantenimiento/modalEdit')
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
    $('#sareas').DataTable();
});
</script>
@stop