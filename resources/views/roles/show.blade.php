@extends('adminlte.master')

@section('content')
    <div class="row">


        <div class="col-sm-12">

            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#informasi" data-toggle="tab">Informasi</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#peserta" data-toggle="tab">Peserta</a>
                        </li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="informasi">
                            <table class="table">
                                @foreach ($permissions as $permission)
                                <tbody>
                                    <td>{{$permission->name}}</td> 
                                </tbody>
                                @endforeach
                            </table>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="peserta">
                            Vijay Gonna Finish This!
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->

                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </div>
@endsection
