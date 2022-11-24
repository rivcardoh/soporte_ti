@extends('adminlte::page')

@section('title', 'Editar persona')

@section('content_header')
    <h1>Editar persona: {{$persona->nombre}} {{$persona->apellido}}</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($persona,['route'=>['persona.update', $persona],
                                    'method'=>'put'])!!}
        <div class="form-row">
            <div class="form-group col-md-6">
                {!!Form::label('nombre', 'Nombre')!!}
                {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('apellido', 'Apellido')!!}
                {!!Form::text('apellido', null, ['class'=>'form-control', 'placeholder'=>'Apellido'])!!}
                @error('apellido')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('ci', 'CI')!!}
                {!!Form::number('ci', null, ['class'=>'form-control', 'placeholder'=>'CI'])!!}
                @error('ci')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                {!!Form::label('celular', 'Celular')!!}
                {!!Form::number('celular', null, ['class'=>'form-control', 'placeholder'=>'Celular'])!!}
                @error('celular')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
            {!!Form::submit('Actualizar', ['class'=>'btn btn-info'])!!}
        {!!Form::close()!!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop