@extends('adminlte.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meeting PMK ITS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Meeting</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#informasi" data-toggle="tab">Informasi</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#peserta" data-toggle="tab">Peserta</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="informasi">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Acara</td>
                                        <td>{{$meeting->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>{{$meeting->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe</td>
                                        <td>{{$meeting->type}}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Mulai</td>
                                        <td>{{$meeting->start}}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Akhir</td>
                                        <td>{{$meeting->end}}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="peserta">
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
