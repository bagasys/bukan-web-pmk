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
                    <h1>Edit User: {{$user->email}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">

                <form role="form" method="POST" action="{{ route('users.update', $user->id)  }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Masukkan email" value="{{$user->email}}" required>
                                </div>
                            </div>
{{--                            <div class="col-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="new_password">New Password</label>--}}
{{--                                    <input type="password" class="form-control" id="new_password" name="new_password"--}}
{{--                                           placeholder="Password Baru (Optional)" value="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Roles:</label>
                                    <select class="duallistbox" multiple="multiple" name="role_ids[]">
                                        @foreach($selected_roles as $role)
                                            <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                        @endforeach
                                        @foreach($unselected_roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
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
            nonSelectedListLabel: 'Available Roles',
            selectedListLabel: 'Chosen Roles',
            moveOnSelect: false,
            moveAllLabel: 'aaa'
        });
    </script>
@endpush

