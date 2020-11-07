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



        @can('edit lecturer')
        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
            IMPORT EXCEL
        </button>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{route('lecturers.import_excel')}}" enctype="multipart/form-data">
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
        <a href="{{route('lecturers.export_excel')}}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <div class="card-tools">
            @can('add lecturer')
            <div class="">
                <a class="btn btn-success" href="{{ route('lecturers.create') }}"> Tambah data dosen</a>
            </div>
            @endcan
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body p-3">
       <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NID</th>
                    <th>Nama</th>
                    <th>Department</th>
                    @can('view detail lecturer')
                        <th style="width: 280px">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($lecturers as $lecturer)
                <tr>
                    <td>{{ $lecturer->nid }}</td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->department }}</td>
                    <td>
                        <div style="display: flex">
                            <div style="margin-right: 5px;">
                                @can('view lecturer')
                                <a class="btn btn-info" href="{{ route('lecturers.show',$lecturer->id) }}"><i class="fa fa-eye"></i></a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('edit lecturer')
                                <a class="btn btn-primary" href="{{ route('lecturers.edit',$lecturer->id) }}"><i class="fa fa-edit"></i></a>
                                @endcan
                            </div>
                            <div style="margin-right: 5px;">
                                @can('delete lecturer')
                                <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger deleteData"><i class="fa fa-trash"></i></button>
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

@push('scripts')
    <!-- Datatables -->
    <script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
      });
    </script>
@endpush
