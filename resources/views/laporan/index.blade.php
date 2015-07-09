@extends('template.app')

@section('content')
 <table id="example2" class="table table-striped table-bordered table-hover">
     <thead>
     <tr >
         <th>ID Laporan</th>
         <th>Latitude</th>
         <th>Longitude</th>
         <th>Status</th>
         <th>Keterangan</th>
         <th>Alamat</th>
         <th>Level</th>
         <th>Foto 1</th>
         <th>Foto 2</th>
         <th>Foto 3</th>
         <th colspan="2">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($laporans as $laporan)
         <tr>
             <td>{{ $laporan->id }}</td>
             <td>{{ $laporan->latitude }}</td>
             <td>{{ $laporan->longitude }}</td>
             <td>{{ $laporan->status }}</td>
             <td>{{ $laporan->keterangan }}</td>
             <td>{{ $laporan->alamat }}</td>
             <td>{{ $laporan->level }}</td>
             <td>{{ $laporan->foto1 }}</td>
             <td>{{ $laporan->foto2 }}</td>
             <td>{{ $laporan->foto3 }}</td>
             <td><a href="{{route('laporan.edit',$laporan->id)}}" class="btn btn-warning">Update</a></td>
              <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['laporan.destroy', $laporan->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@stop