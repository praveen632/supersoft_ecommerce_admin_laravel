@extends('layouts.dashboard')
@section('content')
<div class="col-sm-9 col-md-9 col-lg-9">
<div class="banner-bootom-w3-agileits">
<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="{{ url('/login') }}" method="post">
						{!! csrf_field() !!} 
					  <input type="text" name="username" placeholder="Email id/Phone" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form id="sig_form" >
						 {!! csrf_field() !!} 
					  <input type="text" name="username" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="text" name="email1" placeholder="Email Address" required=" ">
					  <input type="text" name="phone" placeholder="Phone Number" required=" ">
					  <input type="submit" name="submit" value="Register">
					</form>
				  </div>
				  <button type="button" class="cta" data-toggle="modal" data-target="#myModal">Forget Password</button>
				</div>
				



				<div id="myModal" class="modal fade" role="dialog">
                 <div class="modal-dialog">
                   <div class="modal-content">
                   	<form id="form1">
                   	<div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                       <h4 class="modal-title">Please Enter Your email id/Mobile Number for forgot password</h4>
                   	</div>
                   	<div class="modal-body">
                    <div class="col-xs-12">
                      <input type="tel" class="form-control" id="email" name="email" placeholder="Enter Email id / Mobile Number ">
                    </div> <br>       
                   </div><br>

           			<div class="modal-footer">
           				<input class="btn btn-default"  name="submit" type="submit" value="Send">
                   	<!--  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="sendmail()">Send</button> -->
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   	</div>
                   	</form>
                    </div>

                   </div>
                 </div>
             </div>


<div class="form" id="overlay_form" style="background: #cccaca;
    width: 55%;
    padding: 30px;
    display:none;   
    z-index: 9999;">
    <a href="" id="close" class="pull-right form_set1" >Close</a>
<form id="upd_otp">
<h2 style="font-size:18px;">Inter your OTP</h2>
<form id="upd_otp">
	{!! csrf_field() !!} 
  <input type="hidden" name="mobile" id="mobile" >
  <div class="form-group">     
      <input class="form-control" name="otp" id="otp" placeholder="OTP" required=" " type="text">
    </div>
  <center><input type="submit" value="Submit"></center>
</form>
</div>
			

		</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
$(document).click(function() {
  $("#overlay_form").hide();
});
$("#overlay_form").click(function(e) {
  e.stopPropagation();
});

$(function () {
        $('#form1').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '../public/forgot_password',
            data: $('form').serialize(),
            success: function (response) {
            	var data_s = response;
            	console.log(data_s);
            	if(data_s == 'otp_upate'){
            		alert("Password is upated, Please login your SMS password");
                    $('#myModal').modal('hide'); 
            	    window.location.href='index';
            	}else{
            		alert(response);
            	    $('#myModal').modal('hide'); 
            	    location.reload();
            	}           	           
            }
          });
        });
      });


$(function () {
        $('#sig_form').on('submit', function (e) {
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../public/signup',
            data: $('form').serialize(),
            dataType: "json",
            success: function (response) {            	
            	var data_s = response;            	
            	if(data_s == '0'){
            		alert("This Email Id and Phone Already Registered!!!");                 
            	}else{
            		$("#mobile").val(data_s.phone);
					$("#overlay_form").fadeIn(1000);
                    positionPopup();            	   
            	}             	  
            	}           	           
            
          });
        });
      });


$(function () {
        $('#upd_otp').on('submit', function (e) {
          e.preventDefault();         
          $.ajax({
            type: 'post',
            url: '../public/update_otp',
            data: $('form').serialize(),
            success: function (response) {
            	var data_s = response;            	
            	alert(data_s);
            	location.reload();            	          	           
            }
          });
        });
      });


function positionPopup(){
    if(!$("#overlay_form").is(':visible')){
    return;
    }
    $("#overlay_form").css({
    left: ($(window).width() - $('#overlay_form').width()) / 4,
    top: ($(window).width() - $('#overlay_form').width()) / 7,
    position:'absolute'
    });
}

</script>

<script type="text/javascript">
$('.toggle').click(function(){

  // Switches the Icon
  $(this).children('i').toggleClass('fa-pencil');
  
  // Switches the forms  
  $('.form').animate({
	height: "toggle",
	'padding-top': 'toggle',
	'padding-bottom': 'toggle',
	opacity: "toggle"
  }, "slow");
});
</script>


@endsection	