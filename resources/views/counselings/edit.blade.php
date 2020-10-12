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


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Counseling PMK ITS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Alumni</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Edit Data Counseling </h3>
            </div>
            <form role="form" method="POST" action="{{ route('counselings.update',$counseling->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="counselee_name">Nama</label>
                                <input type="text" class="form-control" id="counselee_name" name="counselee_name" placeholder="Masukkan Nama" value="{{ $counseling->counselee_name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="counselee_contact">Contact</label>
                                <input type="text" name="counselee_contact" id="counselee_contact" class="form-control" placeholder="Masukkan Contact" value="{{ $counseling->counselee_contact }}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="counselor_id">Counselor</label>
                            <select id="counselor_id" name="counselor_id" class="form-control select2" style="width: 100%;">
                                @foreach ($counselors as $counselor)
                                @if ($counselor->id == $counseling->counselor_id)
                                <option value="{{$counselor->id}}" selected>{{$counselor->name}}</option>
                                @else
                                <option value="{{$counselor->id}}">{{$counselor->name}}</option>
                                @endif
                                @endforeach
                            </select>
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