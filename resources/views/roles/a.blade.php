@extends('adminlte.master')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Set new permission for role</h3>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('roles.store')}}">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @csrf
                        <div class="form-group">
                            <label>Roles</label>
                            <select name="role_id" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <label>Permission</label>
                            <select multiple="multiple" name="permission_id[]" class="form-control">
                                @foreach($permissions as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </form>
        <!-- /.row -->
    </div>
@endsection

<!-- Bootstrap4 Duallistbox -->
<script src="/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
@stack('scripts')
