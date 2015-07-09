
@extends('template.create')
@section('content')
    {!! Form::open(['url' => 'user']) !!}
     <div class="form-group">
        {!! Form::label('name', 'Nama:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirm', 'Password Confirmation:') !!}
        {!! Form::password('password_confirm',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::hidden('hak_akses',1)!!}
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