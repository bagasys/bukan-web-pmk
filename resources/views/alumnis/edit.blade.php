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


<div class="row">
    <div class="col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Edit Data Alumni </h3>
            </div>
            <form role="form" method="POST" action="{{ route('alumnis.update',$alumni->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nama Alumni</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Alumni" value="{{ $alumni->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department" id="department" class="form-control" placeholder="Masukkan Nama Department" value="{{ $alumni->department }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="job">Pekerjaan</label>
                                <input type="text" name="job" id="job" class="form-control" placeholder="Masukkan Nama Pekerjaan" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="laki-laki" id="laki-laki" {{ ($alumni->sex=="laki-laki")? "checked" : ""}}>
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="perempuan" id="perempuan" {{ ($alumni->sex=="perempuan")? "checked" : ""}}>
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $alumni->address }}" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="text" name="avatar" id="avatar" class="form-control" value="{{ $alumni->avatar }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="year_entry">Tahun Masuk</label>
                                <input type="text" name="year_entry" id="year_entry" class="form-control" value="{{ $alumni->year_entry }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="year_exit">Tahun Keluar</label>
                                <input type="text" name="year_exit" id="year_exit" class="form-control" value="{{ $alumni->year_exit }}" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <label for="year_end">Tahun Meninggal</label>
                                <input type="text" name="year_end" id="year_end" class="form-control" value="{{ $alumni->year_end }}" required>
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