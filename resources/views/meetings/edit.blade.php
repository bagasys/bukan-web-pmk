@extends('adminlte.master')


@section('content')


    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Meeting: {{$meeting->title}}</h3>
                </div>
                <form role="form" method="POST" action="{{ route('meetings.update', $meeting->id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Nama Acara</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Masukkan Nama Acara" value="{{$meeting->title}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                           placeholder="Masukkan Deskripsi Acara" value="{{$meeting->description}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" name="type" id="type" class="form-control"
                                           placeholder="Masukkan Tipe Acara"  value="{{$meeting->type}}"required>
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
                                               id="reservationtime" value="{{$meeting->start}} - {{$meeting->end}}">
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
                format: 'YYYY-MM-DD HH:mm'
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


