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
                    <h1>Tambah Reportase PJ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Reportase PJ</li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-primary">
                <form role="form" method="POST" action="{{ route('fridayservicereports.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
                                           id="title" name="title"
                                           placeholder="Masukkan judul" value="{{old('title')}}">
                                    @error('title')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="speaker">Pembicara</label>
                                    <input type="text" class="form-control {{$errors->has('speaker') ? 'is-invalid' : ''}}"
                                           id="speaker" name="speaker"
                                           placeholder="Masukkan nama pembicara" value="{{old('speaker')}}">
                                    @error('speaker')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="date">Tanggal acara</label>
                                    <input type="date" name="date" id="date"
                                           class="form-control {{$errors->has('date') ? 'is-invalid' : ''}}"
                                           value="{{old('date')}}" required>
                                    @error('date')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <textarea  rows="3" class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}" id="content" name="content"
                                    placeholder="Masukkan content">{{old('content')}}</textarea>
                                    @error('description')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image"
                                    >
                                    @error('image')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>  Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection