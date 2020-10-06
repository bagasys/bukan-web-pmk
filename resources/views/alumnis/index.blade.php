@extends('adminlte.master')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Alumni PMK ITS</h3>


        <div class="card-tools">
            <div class="">
                <a class="btn btn-success" href="{{ route('alumnis.create') }}"> Tambah data alumni</a>
            </div>
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Department</th>
                    <th style="width: 280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->department }}</td>
                    <td>
                        <form action="{{ route('alumnis.destroy', $alumni->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-info" href="{{ route('alumnis.show',$alumni->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('alumnis.edit',$alumni->id) }}">Edit</a>
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