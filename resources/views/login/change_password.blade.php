@extends('layout_setting.dashboard')
@section('content')
<div class="col-sm-9 col-md-9 col-lg-9">
<div class="banner-bootom-w3-agileits">
<div class="w3_login">
<h3>Change Password</h3>
<div class="w3_login_module">
	<div class="module form-module">				  
	  
		<h2>Change Password</h2>
		<form id="sig_form" action="{{ url('change_password')}}" method="POST" >
			 {!! csrf_field() !!}
	     @if(Session::has('message'))
           <div class="alert alert-success" style="text-align:center;">
            <a href="change_password" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong> {{ Session::get('message') }}</strong>
          </div>
          @endif
			
			  <input type="hidden" name="phone" placeholder="Old Password" value="<?php echo $id; ?>" required=" "> 
		  <input type="password" name="old_password" placeholder="Old Password" required=" ">
		  <input type="password" id="password" name="password" placeholder="Password" required=" ">
		  <input type="password" id="conf_password" name="conf_password" placeholder="Confirm Password" oninput="check(this)" required=" ">
		 
		  <input type="submit" name="submit" value="Register">
		</form>	  
	</div>
 </div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
@endsection;