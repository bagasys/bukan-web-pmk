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
                <h1>Edit Student: {{$student->name}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-primary">
            <form role="form" method="POST" action="{{ route('students.update', $student->id)  }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nama Mahasiswa</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Masukkan nama mahasiswa" value="{{$student->name}}">
                                @error('name')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" class="form-control {{$errors->has('department') ? 'is-invalid' : ''}}" id="department" name="department" placeholder="Masukkan department mahasiswa" value="{{$student->department}}">
                                @error('department')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" class="form-control {{$errors->has('nrp') ? 'is-invalid' : ''}}" id="nrp" name="nrp" placeholder="Masukkan NRP mahasiswa" value="{{$student->nrp}}">
                                @error('nrp')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="birthdate">Tanggal lahir</label>
                                <input type="date" name="birthdate" id="birthdate" class="form-control {{$errors->has('birthdate') ? 'is-invalid' : ''}}" value="{{$student->birthdate}}" required>
                                @error('birthdate')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6" style="display: flex; align-items: center">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="l" id="radio-sex-l" checked>
                                    <label class="form-check-label" for="radio-sex-l">Laki-Laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" value="p" id="radio-sex-p">
                                    <label class="form-check-label" for="radio-sex-p">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="current_address">Alamat Saat Ini</label>
                                <input type="text" class="form-control {{$errors->has('current_address') ? 'is-invalid' : ''}}" id="current_address" name="current_address" placeholder="Masukkan alamat mahasiswa" value="{{$student->current_address}}">
                                @error('current_address')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="origin_address">Alamat Asal</label>
                                <input type="text" class="form-control {{$errors->has('origin_address') ? 'is-invalid' : ''}}" id="origin_address" name="origin_address" placeholder="Masukkan alamat asal mahasiswa" value="{{$student->origin_address}}">
                                @error('origin_address')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" id="phone" name="phone" placeholder="Masukkan Nomor Telepon Mahasiswa" value="{{$student->phone}}">
                                @error('phone')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label for="year_entry">Tahun Masuk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input name="year_entry" id="year_entry" type="text" class="datemask form-control {{$errors->has('year_entry') ? 'is-invalid' : ''}}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask value="{{$student->year_entry}}">
                                    @error('year_entry')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <div class="col-md-6">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label for="year_end">Tahun Lulus</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input name="year_end" id="year_end" type="text" class="datemask form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask value="{{$student->year_end}}">

                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>


                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="guardian_name">Nama Wali</label>
                                <input type="text" class="form-control {{$errors->has('guardian_name') ? 'is-invalid' : ''}}" id="guardian_name" name="guardian_name" placeholder="Masukkan NRP mahasiswa" value="{{$student->guardian_name}}">
                                @error('guardian_name')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="guardian_phone">Nomor Telepon Wali</label>
                                <input type="text" class="form-control {{$errors->has('guardian_phone') ? 'is-invalid' : ''}}" id="guardian_phone" name="guardian_phone" placeholder="Masukkan Nomor Telepon Wali" value="{{$student->guardian_phone}}">
                                @error('guardian_phone')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary swalDefaultInfo" value="Data Mahasiswa" id="data"><i class="fa fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

<script>
    $('.datemask').inputmask('yyyy', {
        'placeholder': 'yyyy'
    })
</script>
@endpush