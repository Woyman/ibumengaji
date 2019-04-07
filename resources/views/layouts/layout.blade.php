<!DOCTYPE html>
<html lang="en" >
<head>
@include('layouts.header')
@yield('pageCss') 
</head>
<body class="layout-h">
      <!-- top navbar-->
      @include('layouts.navbar')
      
      <!--CONTENT  Main section--> 
      @yield('content') 

      <!-- Page footer-->
      @include('layouts.footer')
     
   </div>
      @include('layouts.script')
      @yield('pageScript') 

</body>
</html>