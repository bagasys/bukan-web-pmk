<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-3">
        @if(auth()->user()->hasRole('super admin'))
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
          <h2 class="text-center font-weight-bold mb-4"><span style="color:red;"><i class="nav-icon fas fa-cross "></i>PMK</span> <span style="color:#3366ff;">ITS</span></h2>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('users.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        @endif


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-handshake"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('lecturers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('students.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              @can("view alumni")
              <li class="nav-item">
                <a href="{{route ('alumnis.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ALumni</p>
                </a>
              </li>
              @endcan
              <li class="nav-item">
                <a href="{{route ('counselors.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konselor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('counselings.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konseling</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('meetings.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meeting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('prayer-requests.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pray Request</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-money-check-alt"></i>
              <p>
                Keuangan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('transactions.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</aside>