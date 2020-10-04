@extends('lecturers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dosen PMK ITS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lecturers.create') }}"> Tambah data dosen</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NID</th>
            <th>Departemen</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lecturers as $lecturer)
        <tr>
            <td>{{ $lecturer->id }}</td>
            <td>{{ $lecturer->name }}</td>
            <td>{{ $lecturer->nid }}</td>
            <td>{{ $lecturer->department }}</td>
            <td>
                <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('lecturers.show',$lecturer->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('lecturers.edit',$lecturer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $products->links() !!} --}}
      
@endsection