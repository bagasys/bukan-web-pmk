@extends('adminlte.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
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

<div class="row">
    <div class="col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Edit Data User </h3>
            </div>
            <form role="form" method="POST" action="{{ route('users.update',$user->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">New Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department" id="department" class="form-control" placeholder="Masukkan Nama Department" value="{{ $lecturer->department }}" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="laki-laki" id="laki-laki" {{ ($lecturer->sex=="laki-laki")? "checked" : ""}}>
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="perempuan" id="perempuan" {{ ($lecturer->sex=="perempuan")? "checked" : ""}}>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $lecturer->address }}" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $lecturer->email }}">

                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $lecturer->phone }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="is_tpkk_admin" name="is_tpkk_admin">
                        <label class="form-check-label" for="is_tpkk_admin">Pengurus TPKK</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection