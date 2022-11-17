@extends('adminlte::page')
@section('title', 'Regionales')



@section('plugins.Datatables' ,true)
    @section('content')


    <div class="card">
        <div class="card-header">
            <h1 class='.card-title'>Regionales</h1>
        </div>
        {{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'NOMBRE',
    'ESTADO',
    'FECHA CREADO',
    'FECHA ACTUALIZACIÓN',
    ['label' => 'ACCIONES', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
    foreach($regionales as $regional)
$config = [
    'data' => [
        [$regional->id, $regional->nombre, $regional->estado, $regional->created_at,$regional->updated_at,  '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, null, null, null,null, null,  ['orderable' => true]],
];
    
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table3" :heads="$heads" >
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell!!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>        
    </div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop