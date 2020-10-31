@extends('salvation.master')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('salvation/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end js-fullheight">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Our Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('{{$post->image}}');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#">{{$post->created_at}}</a></div>
                                <div><a href="#">{{$post->author}}</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                            <p>{{$post->content}}</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{$posts->links("pagination::salvation")}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
