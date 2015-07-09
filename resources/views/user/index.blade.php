@extends('template.app')

@section('content')
 <table id="example2" class="table table-striped table-bordered table-hover">
     <thead>
     <tr>
         <th>ID User</th>
         <th>Nama</th>
         <th>Email</th>
         <th>Password</th>
         <th colspan="2">Action</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->id }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->password}}</td>
             <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Update</a></td>
             <td>
     {!! Form::open(['method' => 'DELETE', 'route'=>['user.destroy', $user->id]]) !!}
     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}
            </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection