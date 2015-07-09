@extends('template.edit')
@section('content')
    {!! Form::model($stum,['method' => 'PATCH','route'=>['stum.update',$stum->id]]) !!}
     <div class="form-group">
        {!! Form::label('latitude', 'Latitude:') !!}
        {!! Form::text('latitude',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('longitude', 'Longitude:') !!}
        {!! Form::text('longitude',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::hidden('id_users',1)!!}
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