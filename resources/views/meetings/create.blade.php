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
                <h1>Add New Meeting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Meeting</li>
                    <li class="breadcrumb-item active">Add</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-primary">
            <form role="form" method="POST" action="{{ route('meetings.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Nama Acara</label>
                                <input type="text"
                                        class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title"
                                        name="title"
                                        placeholder="Masukkan Nama Acara"
                                        value="{{old('title')}}"
                                        required
                                >
                                @error('title')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description"
                                        placeholder="Masukkan Deskripsi Acara" value="{{old('description')}}" required>
                                @error('description')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <input type="text" name="location" id="location" class="form-control {{$errors->has('location') ? 'is-invalid' : ''}}"
                                       placeholder="Masukkan Lokasi" value="{{old('location')}}" required>
                                @error('location')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="forStudent" id="forStudent">
                                    <label class="form-check-label" for="forStudent">Untuk Mahasiswa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="forLecturer" id="forLecturer">
                                    <label class="form-check-label" for="forLecturer">Untuk Dosen</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="forAlumni" id="forAlumni">
                                    <label class="form-check-label" for="forAlumni">Untuk Alumni</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="forPublic" id="forPublic">
                                    <label class="form-check-label" for="forPublic">Untuk Umum</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" id="type" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}"
                                        placeholder="Masukkan Tipe Acara" value="{{old('type')}}" required>
                                @error('type')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image">
                                @error('image')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Date and time range -->
                            <div class="form-group">
                                <label for="reservationtime">Date and time range:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                    </div>
                                    <input type="text" class="form-control float-right" name="reservationtime"
                                            id="reservationtime" required>
                                    @error('reservationtime')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class=" fa fa-paper-plane"></i>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')

    <script src="{{ asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

    <script>
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
    </script>

    {{--    <script>--}}
    {{--        function doSomething(e){--}}
    {{--            alert(e.target.value);--}}

    {{--        }--}}
    {{--        var $el = $('#reservationtime');--}}
    {{--        $el.on('change', doSomething);--}}
    {{--    </script>--}}

    <script>
    $('.datemask').inputmask('yyyy', {
        'placeholder': 'yyyy'
    })
    </script>

@endpush


