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
                    <h3 class="card-title">Create New Post</h3>
                </div>
                    <form role="form" method="POST" action="{{ route('posts.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title"
                                    placeholder="Masukkan judul" value="{{old('title')}}">
                                    @error('title')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" class="form-control" id="category">
                                        <option value="Camp">Camp</option>
                                        <option value="CSR">CSR</option>
                                        <option value="Persekutuan Jumat">Persekutuan Jumat</option>
                                    </select>
                                    @error('category')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea  rows="3" class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}" id="content" name="content"
                                    placeholder="Masukkan content">{{old('content')}}</textarea>
                                    @error('description')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control {{$errors->has('author') ? 'is-invalid' : ''}}" id="author" name="author"
                                    placeholder="Masukkan nama penulis" value="{{old('author')}}">
                                    @error('author')
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                            </div>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection