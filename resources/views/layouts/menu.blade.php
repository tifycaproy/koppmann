<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">
                       @if(Auth::user()->hasRole('admin'))
                        Administrator
                    @else
                        usuario
                    @endif
                    </small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            {{--   <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button> --}}
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">List</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Item List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Item List</a>
                </li>
              </ul>
            </div>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('informe') }}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Informe</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('grafica') }}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Gráfica</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('alerta') }}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Alertas</span>
            </a>
          </li>
        
        </ul>
      </nav>