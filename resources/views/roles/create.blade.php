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
                    <h1>Create New Role</h1>
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


    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <form role="form" method="POST" action="{{ route('roles.store')  }}">
                    @csrf
                    <div class="card-body">



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama Role</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Masukkan Nama Role" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Permissions:</label>
                                    <select class="duallistbox" multiple="multiple" name="permission_ids[]">
                                        @foreach($permissions as $permission)
                                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
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

    <script src="{{ asset('/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>
    <script>
        $duallistbox = $('.duallistbox')
        $duallistbox.bootstrapDualListbox({
            nonSelectedListLabel: 'Available Permissions',
            selectedListLabel: 'Chosen Permissions',
            moveOnSelect: false,
            moveAllLabel: 'aaa'
        });
    </script>
@endpush
