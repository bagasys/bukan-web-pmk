@extends('lecturer.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit data dosen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecturer.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('lecturer.update',$lecturer->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $lecturer->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NID:</strong>
                    <input type="text" name="nid" value="{{ $lecturer->nid }}" class="form-control" placeholder="NID">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departemen:</strong>
                    <input type="text" name="department" value="{{ $lecturer->department }}" class="form-control" placeholder="Departemen">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis kelamin:</strong><br>
                    <input type="radio" id="male" name="sex" value="Laki-laki" {{ ($lecturer->sex=="Laki-laki")? "checked" : "" }}>
                    <label for="laki-laki">Laki-laki</label><br>
                    <input type="radio" id="female" name="sex" value="Perempuan" {{ ($lecturer->sex=="Perempuan")? "checked" : "" }}>
                    <label for="perempuan">Perempuan</label><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="address" class="form-control" value="{{ $lecturer->address }}" placeholder="Alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" value="{{ $lecturer->email }}" placeholder="123@example.com">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Telepon:</strong>
                    <input type="text" name="phone" class="form-control" value="{{ $lecturer->phone }}" placeholder="0878xxxxxx">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection