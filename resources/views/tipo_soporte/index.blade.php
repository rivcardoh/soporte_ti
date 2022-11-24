@extends('adminlte::page')
@section('title', 'Tipo soporte')
@section('content_header')
<h1>Tipo de soportes</h1>
@stop
@section('content')
@include('tipo_soporte/modalCreate')
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo soporte</button>
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
                @foreach($tsoportes as $tsoporte)
                <tr>
                    <td>{{$tsoporte->id}}</td>
                    <td>{{$tsoporte->nombre}}</td>
                    <td>{{$tsoporte->created_at}}</td>
                    <td>{{$tsoporte->updated_at}}</td>
                    <td>                       
                        @if($tsoporte->estado==1)
                        <button href="{{route('tipo_soporte.edit', $tsoporte->id)}}" data-toggle="modal"
                            data-target="#editModal{{ $tsoporte->id }}"
                            class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </button>
                        <a href="{{route('tipo_soporte.destroy', $tsoporte->id)}}"
                            class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                            <i class="fa fa-lg fa-fw fa-trash"></i>
                        </a>
                        @elseif($tsoporte->estado==0)
                        <a href="{{route('tipo_soporte.destroy', $tsoporte->id)}}"
                            class="btn btn-outline-warning btn-sm" title="Activar">
                            <i class="fa fa-lg  fa-fw fa-toggle-on"></"></i>
                            Desactivado</a>
                        @endif
                    </td>
                </tr>
                <!--Ventana Modal para Actualizar--->
                @include('tipo_soporte/modalEdit')
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