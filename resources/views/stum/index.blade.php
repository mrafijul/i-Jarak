@extends('template.app')

@section('content')
 <table id="example2" class="table table-striped table-bordered table-hover">
     <thead>
     <tr >
         <th>ID Mobil</th>
         <th>Latitude</th>
         <th>Longitude</th>
         <th>Action</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($stum as $stums)
         <tr>
             <td>{{ $stums->id }}</td>
             <td>{{ $stums->latitude }}</td>
             <td>{{ $stums->longitude }}</td>
             <td><a href="{{route('stum.edit',$stums->id)}}" class="btn btn-warning">Update</a></td>
             <td>
     {!! Form::open(['method' => 'DELETE', 'route'=>['stum.destroy', $stums->id]]) !!}
     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}
            </td>
         </tr>
     @endforeach
     

     </tbody>

 </table>
@stop