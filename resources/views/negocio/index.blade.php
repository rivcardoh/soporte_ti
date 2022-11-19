@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Unidad de negocios</h1>
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary">Nuevo negocio</a>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
$(document).ready(function() {
    $('#negocios').DataTable();
});
</script>
@stop