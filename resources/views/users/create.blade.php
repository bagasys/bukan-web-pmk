@extends('adminlte.master')

@section('content')
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Set new role for user</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('users.store')}}">  
                @csrf  
                <div class="form-group">
                    <label>Users</label>
                    <select class="duallistbox" multiple="multiple">
                    @foreach($users as $user)
                        <option>{{$user->email}}</option>    
                    @endforeach
                    </select>
                    <label>Roles</label>
                    <select class="duallistbox" multiple="multiple">
                    @foreach($roles as $role)
                        <option>{{$role->name}}</option>    
                    @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            <!-- /.form-group -->
            </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
</div>    
@endsection

<!-- Bootstrap4 Duallistbox -->
<script src="/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
@stack('scripts')