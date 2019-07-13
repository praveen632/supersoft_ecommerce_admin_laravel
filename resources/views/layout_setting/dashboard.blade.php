<!DOCTYPE html>
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"/> 
<title>Supersoft</title>
 
  <!-- <link rel="icon" type="image/png" href="{{{ asset('public/images/favicon.ico') }}}"> -->
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Supersoft | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->  
 
  

</body>
</head> 
<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
<script defer src="{{ asset('js/jquery.flexslider.js')}}"></script>
<body class="skin-blue sidebar-mini">	
@include('layouts.header')
@include('layout_setting.sidebar')
@include('index')
<!-- <div class="content-wrapper"> -->
  @yield('content')
<!-- </div> -->
@include('layouts.footer')
@yield('footer')
</body>
</html>



