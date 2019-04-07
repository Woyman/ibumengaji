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
                  <a href="{{ URL::to('') }}">Home</a>
                </li>
                <li>
                  <a href="#">Galeri</a>
                </li>
                <li class="dropdown">
                  <a href="#">Tentang Kami</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ URL::to('profil') }}">Profil</a></li>
                    <li><a href="{{ URL::to('filosofi-logo') }}">Filosofi Logo</a></li>
                    <li><a href="{{ URL::to('adart-yayasan') }}">AD ART Yayasan</a></li>
                  </ul>
                </li>
                <li>
                  <a href="{{ URL::to('hubungi-kami') }}">Hubungi Kami</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>