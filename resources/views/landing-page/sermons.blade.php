@extends('salvation.master')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('salvation/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sermons <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Sermons</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    @foreach ($fridayservicereports as $fridayservicereport)
      <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
        <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate">
          <a href="#" class="img" style="background-image: url({{$fridayservicereport->image}});"></a>
        </div>
        <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
          <div class="text p-md-5">
            <h2 class="mb-4"><a href="sermon.html">{{$fridayservicereport->title}}</a></h2>
            <div class="meta">
              <p>
                <span>Speaker: <a href="#" class="ptr">{{$fridayservicereport->speaker}}</a></span>
                <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
                <span><a href="#">On {{$fridayservicereport->date}}</a></span>
              </p>
            </div>
            <p>{{$fridayservicereport->content}}</p>
            <p class="mt-4 btn-customize">
              <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> More Detail</a> 
              {{-- <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a> --}}
            </p>
          </div>
        </div>
      </div>        
    @endforeach

    <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
      <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate order-md-last">
        <a href="#" class="img" style="background-image: url(salvation/images/sermon-2.jpg);"></a>
      </div>
      <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
        <div class="text p-md-5">
          <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
          <div class="meta">
            <p>
              <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
              <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
              <span><a href="#">On Sunday 13 Jan, 2019</a></span>
            </p>
          </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p class="mt-4 btn-customize">
            <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
      <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate">
        <a href="#" class="img" style="background-image: url(salvation/images/sermon-3.jpg);"></a>
      </div>
      <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
        <div class="text p-md-5">
          <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
          <div class="meta">
            <p>
              <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
              <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
              <span><a href="#">On Sunday 13 Jan, 2019</a></span>
            </p>
          </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p class="mt-4 btn-customize">
            <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
      <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate order-md-last">
        <a href="#" class="img" style="background-image: url(salvation/images/sermon-4.jpg);"></a>
      </div>
      <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
        <div class="text p-md-5">
          <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
          <div class="meta">
            <p>
              <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
              <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
              <span><a href="#">On Sunday 13 Jan, 2019</a></span>
            </p>
          </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p class="mt-4 btn-customize">
            <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
          </p>
        </div>
      </div>
    </div>

    <div class="row no-gutters d-flex sermon-wrap ftco-animate bg-light">
      <div class="col-md-6 d-flex align-items-stretch js-fullheight ftco-animate">
        <a href="#" class="img" style="background-image: url(salvation/images/sermon-5.jpg);"></a>
      </div>
      <div class="col-md-6 py-4 py-md-5 ftco-animate d-flex align-items-center">
        <div class="text p-md-5">
          <h2 class="mb-4"><a href="sermon.html">God Wants To Do A New Thing In Your Life</a></h2>
          <div class="meta">
            <p>
              <span>Speaker: <a href="#" class="ptr">Dr. Rolando Henderson</a></span>
              <span>Categories: <a href="#">God</a>, <a href="#">Pray</a>, <a href="#">Faith</a></span>
              <span><a href="#">On Sunday 13 Jan, 2019</a></span>
            </p>
          </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p class="mt-4 btn-customize">
            <a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3 mr-md-2 popup-vimeo"><span class="fa fa-play"></span> Watch Sermons</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3 ml-lg-2"><span class="fa fa-download"></span> Download Sermons</a>
          </p>
        </div>
      </div>
    </div>



    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection