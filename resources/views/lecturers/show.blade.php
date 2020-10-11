@extends('adminlte.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dosen PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dosen</li>
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
                <h3 class="profile-username text-center">{{$lecturer->name}}</h3>
                <p class="text-muted text-center">{{$lecturer->is_tpkk_admin ? 'Dosen Pengurus TPKK' : 'Dosen'}}</p>
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
                    <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat</a>
                    </li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">

                    <div class="active tab-pane" id="data-diri">

                        <table class="table">

                            <tbody>

                                <tr>
                                    <td>NID</td>
                                    <td>{{ $lecturer->nid }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $lecturer->name }}</td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>{{ $lecturer->department }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $lecturer->sex }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{ $lecturer->address }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $lecturer->email }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>{{ $lecturer->phone }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="riwayat">
                        Vijay Gonna Finish This!
                    </div>
                    <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->

                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

</div>
@endsection