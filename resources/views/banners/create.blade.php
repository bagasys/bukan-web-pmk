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
            <div class="card card-primary">
                <form role="form" method="POST" action="{{ route('banners.store')  }}" enctype="multipart/form-data">
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
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" class="form-control {{$errors->has('subtitle') ? 'is-invalid' : ''}}" id="subtitle" name="subtitle"
                                           placeholder="Masukkan subtitle" value="{{old('subtitle')}}">
                                    @error('subtitle')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea  rows="3" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description"
                                    placeholder="Masukkan description">{{old('description')}}</textarea>
                                    @error('description')
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" class="form-control {{$errors->has('proof') ? 'is-invalid' : ''}}" id="image" name="image"
                                    >
                                    @error('proof')
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

