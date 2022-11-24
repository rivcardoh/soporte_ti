@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Subáreas</h1>
@stop
@section('content')
@include('subarea/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo subárea</button>
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
                @foreach($subareas as $sarea)
                <tr>
                    <td>{{$sarea->id}}</td>
                    <td>{{$sarea->nombre}}</td>
                    <td>{{$sarea->created_at}}</td>
                    <td>{{$sarea->updated_at}}</td>
                    <td>
                        <nobr>
                            @if($sarea->estado==1)
                            <button href="{{route('subarea.edit', $sarea->id)}}" data-toggle="modal"
                                data-target="#editModal{{ $sarea->id }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <a href="{{route('subarea.destroy', $sarea->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($sarea->estado==0)
                            <a href="{{route('subarea.destroy', $sarea->id)}}" class="btn btn-outline-warning btn-sm"
                                title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                                Desactivado</a>
                            @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('subarea/modalEdit')
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