@extends('adminlte.master')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Konselor PMK ITS</h3>


        <div class="card-tools">
            <div class="">
                <a class="btn btn-success" href="{{ route('counselors.create') }}"> Tambah data konselor</a>
            </div>
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NID</th>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th style="width: 280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($counselors as $counselor)
                <tr>
                    <td>{{ $counselor->nid }}</td>
                    <td>{{ $counselor->nrp }}</td>
                    <td>{{ $counselor->name }}</td>
                    <td>
                        <form action="{{ route('counselors.destroy', $counselor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-info" href="{{ route('counselors.show',$counselor->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('counselors.edit',$counselor->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection