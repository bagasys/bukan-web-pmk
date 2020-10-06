@extends('adminlte.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Buat Meeting Baru </h3>
                </div>
                <form role="form" method="POST" action="{{ route('meetings.store')  }}">
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
                                           placeholder="Masukkan Deskripsi Acara" value="{{old('description')}}">
                                    @error('description')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" id="type" class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}"
                                           placeholder="Masukkan Tipe Acara" value="{{old('type')}}">
                                    @error('type')
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
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
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


@endpush


