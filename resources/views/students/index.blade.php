@extends('adminlte.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mahasiswa PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
    <div class="card-header">

        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
        <span class="swalDefaultError" value="Data Mahasiswa" id="data">
        </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
        <span class="swalDefaultSuccess" value="Data Mahasiswa" id="data">
        </span>
        @endif

        @can('edit student')
        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
            IMPORT EXCEL
        </button>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{route('students.import_excel')}}" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">

                            {{ csrf_field() }}

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endcan
        <a href="{{route('students.export_excel')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <div class="card-tools">
            @can('add student')
            <div class="">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Tambah data mahasiswa</a>
            </div>
            @endcan
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Department</th>
                    <th>Tanggal Lahir</th>
                    <th style="width: 280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nrp }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->name }}</td>

                    <td>{{ date('d M Y'  ,strtotime($student->birthdate)) }}</td>


                    <td>
                        <div style="display: flex">
                            <div style="margin-right: 5px;">
                                @can('view student')
                                <a class="btn btn-info" href="{{ route('students.show',$student->id) }}"><i class="fa fa-eye"></i></a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('edit student')
                                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="fa fa-edit"></i></a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('delete student')
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
    <div class="card-footer">
        {{$students->links("pagination::bootstrap-4")}}
    </div>
</div>

@endsection