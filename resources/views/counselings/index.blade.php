@extends('adminlte.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Alumni PMK ITS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Alumni</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Counseling PMK ITS</h3>


            <div class="card-tools">
                <div class="">
                    <a class="btn btn-success" href="{{ route('counselings.create') }}"> Tambah data Counseling</a>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Contact</th>
                    <th style="width: 280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($counselings as $counseling)
                    <tr>
                        <td>{{ $counseling->counselee_name }}</td>
                        <td>{{ $counseling->counselee_contact }}</td>
                        <td>
                            <form action="{{ route('counselings.destroy', $counseling->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{ route('counselings.edit',$counseling->id) }}">Edit</a>
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
