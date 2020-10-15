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
                <h1>Pray Request PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pray Request</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <div class="">
                <a class="btn btn-success" href="{{ route('prayerRequests.create') }}"> Tambah data pray request</a>
            </div>
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Content doa</th>
                    <th>Status</th>
                    <th style="width: 280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prayerRequests as $prayerRequest)
                <tr>
                    <td>{{ $prayerRequest->name }}</td>
                    <td>{{ $prayerRequest->prayer_content }}</td>
                    <td>{{ $prayerRequest->status }}</td>
                    <td>
                        <form action="{{ route('prayerRequests.destroy', $prayerRequest->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary" href="{{ route('prayerRequests.edit',$prayerRequest->id) }}">Edit</a>
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