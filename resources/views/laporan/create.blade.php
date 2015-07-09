@extends('template.create')
@section('content')
{!! Form::open(['url' => 'laporan', 'files'=>true ]) !!}
     <div class="form-group">
        {!! Form::label('latitude', 'Latitude:') !!}
        {!! Form::text('latitude',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('longitude', 'Longitude:') !!}
        {!! Form::text('longitude',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('keterangan', 'Keterangan:') !!}
        {!! Form::text('keterangan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('alamat', 'Alamat:') !!}
        {!! Form::text('alamat',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('level', 'Level:') !!}
        {!! Form::text('level',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Foto 1') !!}
        {!! Form::file('foto1', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Foto 2') !!}
        {!! Form::file('foto2', null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Foto 3') !!}
        {!! Form::file('foto3', null) !!}
    </div>
    {!! Form::hidden('id_users',1)!!}
    {!! Form::hidden('status','belum') !!}
    <div class="form-group"> 
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    @if($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    
</ul>
@endif
    
@stop
