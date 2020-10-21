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
                <h1>User Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
    <div class="card-header">

        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('file') }}</strong>
        </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $sukses }}</strong>
            </div>
        @endif

        <div class="card-tools">
            @can('add student')
                <div class="">
                    <a class="btn btn-success" href="{{ route('students.create') }}">Tambah Role Baru</a>
                </div>
            @endcan
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th style="">Email</th>
                <th style="">Role</th>
                <th style="">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                        {{ $role->name. " |"}}
                        @endforeach
                    </td>
                    <td>
                        <div style="display: flex">
                            <div style="margin-right: 5px;">
                                @can('view role')
                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('edit role')
                                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('delete role')
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
