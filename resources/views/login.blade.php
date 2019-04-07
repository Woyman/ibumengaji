<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8">
  <title>Login Author | Yayasan Ibu Mengaji Indonesia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/sequence.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="{{ asset('assets/ico/icon-yayasan-ibu-indonesia-mengaji.png') }}">
<!--   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

</head>
<body class="layout-h">
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span6 offset3">
          <div class="well well-info">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="Password" class="form-control" type="password" name="password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-color">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
  <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('assets/js/modernizr.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.elastislide.js') }}"></script>
  <script src="{{ asset('assets/js/sequence/sequence.jquery-min.js') }}"></script>
  <script src="{{ asset('assets/js/sequence/setting.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/application.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('assets/js/hover/jquery-hover-effect.js') }}"></script>
  <script src="{{ asset('assets/js/hover/setting.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>


