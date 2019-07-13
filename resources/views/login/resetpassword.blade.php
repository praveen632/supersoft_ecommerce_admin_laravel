@extends('layouts.dashboard')
@section('content')
<div class="col-sm-9 col-md-9 col-lg-9">
<div class="banner-bootom-w3-agileits">
   <div class="w3_login_module">
				<div class="module form-module">
				  <div class="">
					
				  </div>
				  <div class="form">
					<h2>Reset Password</h2>
					<form action="{{ url('/resetpassword') }}" method="post">
						 {!! csrf_field() !!}
					   <input type="hidden" name="email" id="email" value="<?php echo $email ?>" >
					  <input type="password" name="password" placeholder="Password" id="password" required=" ">
					  <input type="password" name="con_password" placeholder="Confirm Password" id="con_password" required=" " oninput="check(this)">
					 
					  <input type="submit" value="Update">
					</form>
				  </div>
				</div>
			</div>
</div>
</div>

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
@endsection	