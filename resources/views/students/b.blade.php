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
                    <h1>Alumni PMK ITS</h1>
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

    <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Dosen </h3>
                </div>
                <form role="form" method="POST" action="{{ route('students.update',$student->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Masukkan Nama Mahasiswa" value="{{ $student->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nid">NRP</label>
                                    <input type="text" class="form-control" id="nrp" name="nrp"
                                           placeholder="Masukkan NRP" value="{{ $student->nrp }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department" class="form-control"
                                           placeholder="Masukkan Nama Department" value="{{ $student->department }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="department">Tanggal lahir</label>
                                    <input type="date" name="birthdate" id="birthdate" class="form-control"
                                           value="{{ $student->birthdate }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" value="laki-laki"
                                                   id="laki-laki" {{ ($student->sex=="laki-laki")? "checked" : ""}}>
                                            <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" value="perempuan"
                                                   id="perempuan" {{ ($student->sex=="perempuan")? "checked" : ""}}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="current_address">Alamat saat ini</label>
                                    <input type="text" name="current_address" id="current_address" class="form-control"
                                           value="{{ $student->current_address }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="origin_address">Alamat asal</label>
                                    <input type="text" name="origin_address" id="origin_address" class="form-control"
                                           value="{{ $student->origin_address }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $student->phone }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="year_entry">Tahun masuk</label>
                                    <input type="number" name="year_entry" id="year_entry" class="form-control" value="{{ $student->year_entry }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="year_end">Tahun lulus</label>
                                    <input type="number" name="year_end" id="year_end" class="form-control" value="{{ $student->year_end }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="guardian_name">Nama PKK</label>
                                    <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                                           placeholder="Masukkan Nama PKK" value="{{ $student->guardian_name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="guardian_phone">Nomor Telepon PKK</label>
                                    <input type="text" name="guardian_phone" id="guardian_phone" class="form-control" value="{{ $student->guardian_phone }}" required>
                                </div>
                            </div>
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


