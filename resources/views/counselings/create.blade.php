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
                <h1>Counseling PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Konseling</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Masukkan Data Counseling </h3>
            </div>
            <form role="form" method="POST" action="{{ route('counselings.store')  }}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="counselee_name">Nama</label>
                                <input type="text" class="form-control" id="counselee_name" name="counselee_name" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="counselee_contact">Contact</label>
                                <input type="text" class="form-control" id="counselee_contact" name="counselee_contact" placeholder="Masukkan Contact" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="counselor_id">Counselor</label>
                            <select id="counselor_id" name="counselor_id" class="form-control select2" style="width: 100%;">
                                @foreach ($counselors as $counselor)
                                <option value="{{$counselor->id}}">{{$counselor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection