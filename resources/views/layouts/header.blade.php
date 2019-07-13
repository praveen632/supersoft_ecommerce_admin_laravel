<!DOCTYPE html>
<?php 
$data = Session::get('data');

// $url = url('/');
// if(!isset($data)){
//     if(Session::get('username') == ""){
//         header('Location:'.$url.'/login');
//        die();
//     }
//   }else
//   {
//   $id = $data->id;  
//   }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Supersoft | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->

 <style>

.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
          
 <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui1.css') }}">
    <!-- flexslider -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />  
   <body style="background:white;">
<!-- header -->
    <div class="w3ls_logo_products_left1" style="background:#f5f5f5 !important;         padding: 7px 0px 6px 107px; margin-top:0px;">
    <div class="container">
        <ul class="special_items">
  <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(+91) 9999999999</a></li>
  <li><a href="#"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;Download App</a></li>
   <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;Subscribe</a></li>
   <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Track Order</a></li>
    <?php if($data != NULL){ ?>   
               <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn" style="background:none; color:black;">My Account<span class="caret"></span></button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="<?php echo url('myprofile?id='.$data->phone) ?>">My Profile</a>
                    <a href="<?php echo url('logout') ?>">Logout</a>    
                  </div>
                </div>
    <?php }else{ ?>
    <li><a href="<?php echo url('login') ?>"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login & Signup</a></li>
    <?php } ?>
</ul>

        <div class="clearfix"> </div>
        </div>
    </div>
<!-- script-for sticky-nav -->
   
<!-- //script-for sticky-nav -->
    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="<?php echo url('/') ?>"><span>Online</span> Store</a></h1>
            </div>
            <div class="w3l_search">
            <form action="#" method="post">
                <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <div class="product_list_header">  
            <form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
        </div>
        <div class="w3l_header_right">
             
           <!--  <ul>
                <li class="dropdown profile_details_drop">
                    <a href="login.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>
                    
                </li>
            </ul> -->
        </div>
            
            
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //header -->
<!-- banner -->
<div class="agileits_header1">
        <div class="w3l_offers" style="width:224px;">
            <a href="<?php echo url('/') ?>">CATEGORIES</a>
        </div>
        
        
        <div class="w3l_offers1">
            <a href="#">Today's special Offers !</a>
        </div>
        <div class="w3l_offers1">
            <a href="#">Superdeals</a>
        </div>
        <div class="w3l_offers1">
            <a href="<?php echo url('/special/package') ?>">Special Package Product</a>
        </div>
        
        <div class="w3l_offers1">
            <a href="#">How We Work</a>
        </div>
        <div class="clearfix"> </div>
    </div>      
     <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
     </body>