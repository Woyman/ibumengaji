<!DOCTYPE html>
<html lang="en" >
<head>
@include('layouts.header-author')
@yield('pageCss') 
</head>
<body class="layout-h">
      <!-- top navbar-->
      @include('layouts.navbar-author')
      
      <!--CONTENT  Main section--> 
      @yield('content') 

      <!-- Page footer-->
      
     
   </div>
      @include('layouts.script-author')
      @yield('pageScript') 

</body>
</html>