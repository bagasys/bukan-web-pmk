@extends('adminlte.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dosen PMK ITS</h3>


            <div class="card-tools">
                <div class="">
                    <a class="btn btn-success" href="{{ route('lecturers.create') }}"> Tambah data dosen</a>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th style="">NID</th>
                    <th>Nama</th>
                    <th>Department</th>
                    <th style="width: 280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($lecturers as $lecturer)
                    <tr>
                        <td>{{ $lecturer->nid }}</td>
                        <td>{{ $lecturer->name }}</td>
                        <td>{{ $lecturer->department }}</td>
                        <td>
                            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{ route('lecturers.show',$lecturer->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('lecturers.edit',$lecturer->id) }}">Edit</a>
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
