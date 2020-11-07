<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 location">
                    <span class="fa fa-map-marker mr-2"></span> 203 Fake St. Mountain View, San Francisco, California, USA
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="https://www.instagram.com/pmk_its/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="https://line.me/ti/p/~@cox6942k" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fab fa-line">Line</span></a>
                        {{-- <a href="https://line.me/ti/p/~@cox6942k" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fab fa-youtube">UTube</span></a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index">Salvation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="ministries" class="nav-link">Ministries</a></li>
                <li class="nav-item"><a href="sermons" class="nav-link">Sermons</a></li>
                <li class="nav-item"><a href="events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="contact" class="nav-link">Donate</a></li>
                @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{'Welcome, '.Auth::user()->email }}
                        {{-- @if(Auth::user()->avatar)
                        <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="40">
                        @endif
                        <span class="caret"></span> --}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endauth
                @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->