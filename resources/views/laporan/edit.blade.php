@extends('template.edit')
@section('content')
{!! Form::model($laporan,['method' => 'PATCH','route'=>['laporan.update',$laporan->id]]) !!}
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
        {!! Form::label('foto1', 'Foto 1:') !!}
        {!! Form::text('foto1',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto2', 'Foto 2:') !!}
        {!! Form::text('foto2',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto3', 'Foto 3:') !!}
        {!! Form::text('foto3',null,['class'=>'form-control']) !!}
    </div>
<!--  {!! Form::hidden('id_users',1)!!}
    {!! Form::hidden('status','belum') !!} -->
    <div class="form-group"> 
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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
