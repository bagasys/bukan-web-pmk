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


    <div class="row">
        <div class="col-sm-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Banner </h3>
                </div>
                <form role="form" method="POST" action="{{ route('banners.update', $banner->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title"
                                           placeholder="Masukkan judul" value="{{$banner->title}}">
                                    @error('title')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" class="form-control {{$errors->has('subtitle') ? 'is-invalid' : ''}}" id="subtitle" name="subtitle"
                                           placeholder="Masukkan subtitle" value="{{$banner->subtitle}}">
                                    @error('subtitle')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea  rows="3" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description"
                                               placeholder="Masukkan description">{{$banner->description}}</textarea>
                                    @error('description')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file"
                                           class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" id="image"
                                           name="image"
                                    >
                                    @error('image')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <img src="{{$banner->image}}" width="100px">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
