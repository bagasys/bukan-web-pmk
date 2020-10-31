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
                <h1>Add New Lecturer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dosen</li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<div class="row">
    <div class="col-sm-12">
        <div class="card card-primary">
            <form role="form" method="POST" action="{{ route('lecturers.store')  }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Nama Dosen</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" placeholder="Masukkan Nama Dosen" value="{{old('name')}}" required>
                                @error('name')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="nid">NID</label>
                                <input type="text" class="form-control {{$errors->has('nid') ? 'is-invalid' : ''}}" id="nid" name="nid" placeholder="Masukkan NID" value="{{old('nid')}}" required>
                                @error('nid')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" name="department" id="department" class="form-control {{$errors->has('department') ? 'is-invalid' : ''}}" placeholder="Masukkan Nama Department" value="{{old('department')}}" required>
                                @error('department')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="sex" value="laki-laki" id="laki-laki">
                                        <label class="form-check-label" for="laki-laki">Laki-Laki</label>
                                    </div>

                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="radio" name="sex" value="perempuan" id="perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" placeholder="Masukkan Alamat" name="address" id="address" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{old('address')}}">
                                @error('address')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Masukkan Email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email')}}">
                                @error('email')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="text" placeholder="Nomor Telepon" name="phone" id="phone" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{old('phone')}}">
                                @error('phone')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input {{$errors->has('is_tpkk_admin') ? 'is-invalid' : ''}}" id="is_tpkk_admin" name="is_tpkk_admin">
                        <label class="form-check-label" for="is_tpkk_admin">Pengurus TPKK</label>
                            @error('is_tpkk_admin')
                                <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
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

@push('scripts')
<script src="{{asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

<script>
    $('.datemask').inputmask('yyyy', {
        'placeholder': 'yyyy'
    })
</script>
@endpush
