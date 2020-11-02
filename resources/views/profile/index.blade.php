@extends('adminlte.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @role('mahasiswa')
                    <h1>Data Mahasiswa</h1>
                    @endrole
                    @role('dosen')
                    <h1>Data Dosen</h1>
                    @endrole
                    @role('alumni')
                    <h1>Data Alumni</h1>
                    @endrole

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        @role('mahasiswa')
                        <li class="breadcrumb-item active">Mahasiswa</li>
                        @endrole
                        @role('dosen')
                        <li class="breadcrumb-item active">Dosen</li>
                        @endrole
                        @role('alumni')
                        <li class="breadcrumb-item active">Alumni</li>
                        @endrole
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
                    <h3 class="profile-username text-center">{{$profile->model->name}}</h3>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>

        <div class="col-md-9">

            <div class="card">
                <div class="card-header p-2">
                    @role('mahasiswa')
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active fas fa-user-cog" href="{{ route('profiles.editStudent',$profile->model->id) }}" ></a>
                        </li>
                    </ul>


                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">

                        <div class="active tab-pane" id="data-diri">

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $profile->model->name }}</td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>{{ $profile->model->department }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $profile->model->sex }}</td>
                                </tr>

                                <tr>
                                    <td>NRP</td>
                                    <td>{{ $profile->model->nrp }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun masuk</td>
                                    <td>{{ $profile->model->year_entry }}</td>
                                </tr>

                                <tr>
                                    <td>Tanggal lahir</td>
                                    <td>{{ $profile->model->birthdate }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat asal</td>
                                    <td>{{ $profile->model->origin_address }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat saat ini</td>
                                    <td>{{ $profile->model->current_address }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>{{ $profile->model->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun lulus</td>
                                    <td>{{ $profile->model->year_end }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>{{ $profile->model->guardian_name }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon Wali</td>
                                    <td>{{ $profile->model->guardian_phone }}</td>
                                </tr>

                                @endrole

                @role('dosen')
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active fas fa-user-cog" href="{{ route('profiles.editLecturer',$profile->model->id) }}" ></a>
                    </li>
                </ul>

                </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="active tab-pane" id="data-diri">

                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{ $profile->model->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Department</td>
                                        <td>{{ $profile->model->department }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $profile->model->sex }}</td>
                                    </tr>
                                    <tr>
                                        <td>NID</td>
                                        <td>{{ $profile->model->nid }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ $profile->model->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td>{{ $profile->model->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $profile->model->email }}</td>
                                    </tr>

                @endrole


                @role('alumni')
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active fas fa-user-cog" href="{{ route('profiles.editAlumni',$profile->model->id) }}" ></a>
                    </li>
                </ul>


                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">

                        <div class="active tab-pane" id="data-diri">

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $profile->model->name }}</td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>{{ $profile->model->department }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $profile->model->sex }}</td>
                                </tr>

                                <tr>
                                    <td>Tahun Masuk</td>
                                    <td>{{ $profile->model->year_entry }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Keluar</td>
                                    <td>{{ $profile->model->year_exit }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>{{ $profile->model->job }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{ $profile->model->address }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun Meninggal</td>
                                    <td>{{ $profile->model->year_end }}</td>
                                </tr>
                @endrole
                            </tbody>
                            </table>

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
