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

        @can('edit student')
            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                IMPORT EXCEL
            </button>
        @endcan
        <a href="/students/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <div class="card-tools">
            @can('add student')
                <div class="">
                    <a class="btn btn-success" href="{{ route('alumnis.create') }}"> Tambah data alumni</a>
                </div>
            @endcan
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Department</th>
                    <th>Tahun Masuk</th>
                    <th>Tahun Lulus</th>
                    <th style="width: 280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $alumni)
                <tr>
                    <td>{{ $alumni->name }}</td>
                    <td>{{ $alumni->department }}</td>
                    <td>{{ $alumni->year_entry }}</td>
                    <td>{{ $alumni->year_exit }}</td>
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
