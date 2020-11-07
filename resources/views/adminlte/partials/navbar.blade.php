<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route ('home')}}" class="nav-link">Home</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <a  href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off mr-3" style="color:gray;" onmouseover="this.style.color='red'" onmouseout ="this.style.color='gray'"> Log out</i>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </ul>
</nav>
