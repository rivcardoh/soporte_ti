@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Unidad de negocios</h1>
@stop
@section('content')
<!--Ventana Modal para Crear--->
@include('negocio/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo negocio</button>
    </div>
    <div class="card-body">
        <table id="negocios" class="table table-striped table-bordered" style="width:100%">
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
                @foreach($negocios as $negocio)
                <tr>
                    <td>{{$negocio->id}}</td>
                    <td>{{$negocio->nombre}}</td>
                    <td>{{$negocio->created_at}}</td>
                    <td>{{$negocio->updated_at}}</td>
                    <td>
                        <nobr>
                            @if($negocio->estado==1)
                            <button href="{{route('negocio.edit', $negocio->id)}}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal"
                                data-target="#editModal{{ $negocio->id }}" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i></button>
                            <a href="{{route('negocio.destroy', $negocio->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($negocio->estado==0)
                            <a href="{{route('negocio.destroy', $negocio->id)}}" class="btn btn-outline-warning btn-sm"
                                title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                                Desactivado</a>
                            @endif
                        </nobr>
                    </td>
                </tr>
            </tbody>
            <!--Ventana Modal para Actualizar--->
            @include('negocio/modalEdit')
            @endforeach
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
    $('#negocios').DataTable();
});
</script>
@stop