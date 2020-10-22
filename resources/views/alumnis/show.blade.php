@extends('adminlte.master')

@section('content')

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

<div class="row">
    <div class="col-md-3">

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$alumni->name}}</h3>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#data-diri" data-toggle="tab">Data
                            Diri</a>
                    </li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="data-diri">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Department</td>
                                    <td>{{ $alumni->department }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $alumni->name }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $alumni->sex }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Masuk</td>
                                    <td>{{ $alumni->year_entry }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Keluar</td>
                                    <td>{{ $alumni->year_exit }}</td>
                                </tr>
                                @can('view detail')
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <td>{{ $alumni->job }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ $alumni->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Meninggal</td>
                                        <td>{{ $alumni->year_end }}</td>
                                    </tr>
                                @endcan
                            </tbody>
                        </table>

                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
@endsection
