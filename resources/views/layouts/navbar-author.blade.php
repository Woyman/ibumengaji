<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="#" style="margin-top: 3px"><img src="{{ asset('assets/logo-yayasan-ibu-indonesia-mengaji.png') }}" alt="Logo Yayasan Ibu Indonesia Mengaji" width="90px"></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="{{ URL::to('author') }}">Dashboard</a>
                </li>
                <li>
                  <a href="#">Galeri</a>
                </li>
                <li class="dropdown">
                  <a href="#">Berita</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('author/tambah-berita') }}">Tambah Berita Baru</a></li>
                    <li><a href="{{ URL::to('author/berita') }}">List Berita</a></li>
                    
                  </ul>
                </li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                  </form>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  