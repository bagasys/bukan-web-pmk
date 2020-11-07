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
                    @role('mahasiswa')
                    <h1>Edit Student: {{$profile->model->name}}</h1>
                    @endrole
                    @role('dosen')
                    <h1>Edit $profile->model: {{$profile->model->name}}</h1>
                    @endrole
                    @role('alumni')
                    <h1>Edit Alumni: {{$profile->model->name}}</h1>
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
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                @role('mahasiswa')
                <form role="form" method="POST" action="{{ route('students.update', $profile->model->id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Mahasiswa</label>
                                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"
                                           id="name" name="name"
                                           placeholder="Masukkan nama mahasiswa" value="{{$$profile->model->name}}">
                                    @error('name')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('department') ? 'is-invalid' : ''}}"
                                           id="department" name="department"
                                           placeholder="Masukkan department mahasiswa" value="{{$profile->model->department}}">
                                    @error('department')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="nrp">NRP</label>
                                    <input type="text" class="form-control {{$errors->has('nrp') ? 'is-invalid' : ''}}"
                                           id="nrp" name="nrp"
                                           placeholder="Masukkan NRP mahasiswa" value="{{$profile->model->nrp}}">
                                    @error('nrp')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="birthdate">Tanggal lahir</label>
                                    <input type="date" name="birthdate" id="birthdate"
                                           class="form-control {{$errors->has('birthdate') ? 'is-invalid' : ''}}"
                                           value="{{$profile->model->birthdate}}" required>
                                    @error('birthdate')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: flex; align-items: center">
                                <!-- radio -->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="l"
                                               id="radio-sex-l" checked>
                                        <label class="form-check-label" for="radio-sex-l">Laki-Laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="p"
                                               id="radio-sex-p">
                                        <label class="form-check-label" for="radio-sex-p">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="current_address">Alamat Saat Ini</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('current_address') ? 'is-invalid' : ''}}"
                                           id="current_address" name="current_address"
                                           placeholder="Masukkan alamat mahasiswa"
                                           value="{{$profile->model->current_address}}">
                                    @error('current_address')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="origin_address">Alamat Asal</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('origin_address') ? 'is-invalid' : ''}}"
                                           id="origin_address" name="origin_address"
                                           placeholder="Masukkan alamat asal mahasiswa"
                                           value="{{$profile->model->origin_address}}">
                                    @error('origin_address')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}"
                                           id="phone" name="phone"
                                           placeholder="Masukkan Nomor Telepon Mahasiswa"
                                           value="{{$profile->model->phone}}">
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
                                        <input name="year_entry" id="year_entry" type="text"
                                               class="datemask form-control {{$errors->has('year_entry') ? 'is-invalid' : ''}}"
                                               data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy"
                                               data-mask value="{{$profile->model->year_entry}}">
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
                                        <input name="year_end" id="year_end" type="text"
                                               class="datemask form-control {{$errors->has('year_end') ? 'is-invalid' : ''}}"
                                               data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy"
                                               data-mask value="{{$profile->model->year_end}}">
                                        @error('year_end')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>


                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="guardian_name">Nama Wali</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('guardian_name') ? 'is-invalid' : ''}}"
                                           id="guardian_name" name="guardian_name"
                                           placeholder="Masukkan NRP mahasiswa" value="{{$profile->model->guardian_name}}">
                                    @error('guardian_name')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="guardian_phone">Nomor Telepon Wali</label>
                                    <input type="text"
                                           class="form-control {{$errors->has('guardian_phone') ? 'is-invalid' : ''}}"
                                           id="guardian_phone" name="guardian_phone"
                                           placeholder="Masukkan Nomor Telepon Wali" value="{{$profile->model->guardian_phone}}">
                                    @error('guardian_phone')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                    </div>
                </form>
                @endrole
                @role('dosen')
                <form role="form" method="POST" action="{{ route('lecturers.update',$profile->model->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Dosen</label>
                                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Masukkan Nama Dosen" value="{{ $profile->model->name }}" required>
                                    @error('name')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="nid">NID</label>
                                    <input type="text" class="form-control {{$errors->has('nid') ? 'is-invalid' : ''}}" id="nid" name="nid" placeholder="Masukkan NID" value="{{ $profile->model->nid }}" required>
                                    @error('nid')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department" class="form-control {{$errors->has('department') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama Department" value="{{ $profile->model->department }}" required>
                                    @error('department')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" value="laki-laki" id="laki-laki" {{ ($profile->model->sex=="laki-laki")? "checked" : ""}}>
                                            <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" value="perempuan" id="perempuan" {{ ($profile->model->sex=="perempuan")? "checked" : ""}}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <input type="text" name="address" id="address" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{ $profile->model->address }}">
                                    @error('address')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{ $profile->model->email }}">
                                    @error('email')
                                    <span class="error invalid-feedback">{{$emailessage}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" name="phone" id="phone" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{ $profile->model->phone }}">
                                    @error('phone')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input {{$errors->has('name') ? 'is-invalid' : ''}}" id="is_tpkk_admin" name="is_tpkk_admin">
                            <label class="form-check-label" for="is_tpkk_admin">Pengurus TPKK</label>
                                    @error('name')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @endrole
                @role('alumni')
                <form role="form" method="POST" action="{{ route('alumnis.update',$profile->model->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Alumni</label>
                                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Masukkan Nama Alumni" value="{{ $profile->model->name }}" required>
                                    @error('name')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="username" name="username" placeholder="Masukkan Username" value="{{ $profile->model->username }}" required>
                                    @error('username')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department" class="form-control {{$errors->has('department') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama Department" value="{{ $profile->model->department }}" required>
                                    @error('department')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="job">Pekerjaan</label>
                                    <input type="text" name="job" id="job" class="form-control {{$errors->has('job') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama Pekerjaan" value="{{ $profile->model->job }}">
                                    @error('job')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="radio" name="sex" value="laki-laki" id="laki-laki" {{ ($profile->model->sex=="laki-laki")? "checked" : ""}}>
                                            <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                        </div>

                                        <div class="form-check ml-3">
                                            <input class="form-check-input" type="radio" name="sex" value="perempuan" id="perempuan" {{ ($profile->model->sex=="perempuan")? "checked" : ""}}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <input type="text" name="address" id="address" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{ $profile->model->address }}">
                                    @error('address')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control" value="{{ $profile->model->avatar }}">
                                    @error('avatar')
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
                                        <input name="year_entry" id="year_entry" type="text" class="datemask form-control {{$errors->has('year_entry') ? 'is-invalid' : ''}}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask value="{{$profile->model->year_entry}}">
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
                                    <label for="year_exit">Tahun Keluar</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input name="year_exit" id="year_exit" type="text" class="datemask form-control {{$errors->has('year_exit') ? 'is-invalid' : ''}}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask value="{{$profile->model->year_exit}}">
                                        @error('year_exit')
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
                                    <label for="year_end">Tahun Meninggal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input name="year_end" id="year_end" type="text" class="datemask form-control {{$errors->has('year_end') ? 'is-invalid' : ''}}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask value="{{$profile->model->year_end}}">
                                        @error('year_end')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Submit</button>
                        </div>
                    </div>
                </form>
                @endrole
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

    <script>
        $('.datemask').inputmask('yyyy', {'placeholder': 'yyyy'})
    </script>
@endpush
