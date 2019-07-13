@extends('layout_order.dashboard')
@section('content')

<head>
   <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/event_attend.js')}}"></script>

 
<div><br>
<div class="container section">
      <form method="post" name="payuForm" action="https://sandboxsecure.payu.in/_payment">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>  
         <div class="row" style="margin-left:36%;">
          <div class="col-50">
            <h3>Basic Details</h3>
            <input type="hidden" name="key" id="key" value="IWO20zLa" />
            <input type="hidden" name="hash_string" id="hash_string" value="" />
            <input type="hidden" name="hash"  id="hash" value=""/>
            <input type="hidden" name="txnid" id="txnid" value="" />
            <tr hidden>
   <input type="hidden" id="user_id" name="user_id" value="<?php echo $data[0]->user_id; ?>">
   <input type="hidden" id="item_id" name="item_id" value="<?php echo $data[0]->item_id; ?>">
<input type="hidden" id="amount" name="amount" value="<?php echo $data[0]->amount; ?>">
<span id="rfname" class="invalid"><p></p></span>

<div class="form-group">
<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="firstname" name="firstname" placeholder="John M. Doe" value="" required="">

</div>

<div class="form-group">
   <span id="remail" class="invalid"><p></p></span>
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder="john@example.com" value="" style="margin-left:10%;" required="">
</div>
<div class="form-group">
<span id="rphone" class="invalid"><p></p></span>
<label for="phone"><i class="fa fa-envelope"></i> Phone</label>
<input type="text" id="phone" name="phone" placeholder="+91 1001200154" value="" style="margin-left:20px;" required="">
</div>


<input  name="productinfo" id="productinfo" type="hidden" placeholder="10001" value="1">
<input  name="surl" id="surl" type="hidden" value="{{url('/payment_success/')}}">
<input  name="furl" id="furl" type="hidden" value="{{url('/payment_failure/')}}">
<input  name="service_provider" id="service_provider" type="hidden" value="payu_paisa" size="64">
<!-- <input id="booking" value="Confirm booking" class="btn" onclick="create_data()"> -->
<center><button type="button" class="btn btn-primary" onclick="create_data()">Confirm Booking</button></center>

</div>


</form></div></div><br>
@endsection;

