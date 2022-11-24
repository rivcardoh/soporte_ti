@extends('adminlte::page')
@section('title', 'Tipo soporte')
@section('content_header')
<h1>Sistemas operativos</h1>
@stop
@section('content')
@include('sistema_operativo/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo sistema</button>
    </div>
    <div class="card-body">
        <table id="tsoportes" class="table table-striped table-bordered" style="width:100%">
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
                @foreach($soperativos as $soperativo)
                <tr>
                    <td>{{$soperativo->id}}</td>
                    <td>{{$soperativo->nombre}}</td>
                    <td>{{$soperativo->created_at}}</td>
                    <td>{{$soperativo->updated_at}}</td>
                    <td>
                        <nobr>
                            @if($soperativo->estado==1)
                            <button href="{{route('sistema_operativo.edit', $soperativo->id)}}" data-toggle="modal"
                                data-target="#editModal{{ $soperativo->id }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                            <a href="{{route('sistema_operativo.destroy', $soperativo->id)}}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>
                            @elseif($soperativo->estado==0)
                            <a href="{{route('sistema_operativo.destroy', $soperativo->id)}}"
                                class="btn btn-outline-warning btn-sm" title="Activar">
                                <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                                Desactivado</a>
                            @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('sistema_operativo/modalEdit')
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
    $('#tsoportes').DataTable();
});
</script>
@stop