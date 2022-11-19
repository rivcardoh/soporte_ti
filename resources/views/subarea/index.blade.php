@extends('adminlte::page')
@section('title', 'Neogocio')
@section('content_header')
<h1>Subáreas</h1>
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <a href="" class="btn btn-primary">Nueva subárea</a>
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
    $('#sareas').DataTable();
});
</script>
@stop