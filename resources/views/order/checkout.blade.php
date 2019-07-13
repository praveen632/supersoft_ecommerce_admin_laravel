@extends('layout_order.dashboard')
@section('content')
<head>
   <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<form id = "all_form" >
	<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_data->id ?>">
	{!! csrf_field() !!} 
<?php 
$data = Session::get('data');

if(!isset($data)){
    if(Session::get('username') == ""){
       echo "Please Login";
    }
}else{ ?>
	 <div class="_1GRhLX _38vNoF">
	    <div class="_1QbRjw">
	        <h3 class="_2RMAtd"><span class="_1Tmvyj">1</span></h3>
	        <div class="_3FNwOm">
	            <div class="_1_m52b">Login
	                <svg height="10" width="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="_3baQOY">
	                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" stroke="#2974f0"></path>
	                </svg>
	            </div>
	            <div class="_2jDL7w">
	                <div><span class="_3MeY5j"><?php echo $user_data->phone ?></span></div>
	            </div>
	        </div>	       
	    </div>
	</div>
 <?php  } ?>
 
<?php if(count($add_data) > '0'){ ?>
	<div class="_1GRhLX _38vNoF undefined">
    <h3 class="_1fM65H _2RMAtd"><span class="_1Tmvyj">2</span><span class="_1_m52b">Delivery Address</span></h3>
    <div id="delevery" class="_3K1hJZ">
        <div>
            <div>
            	<?php foreach ($add_data as $row) { ?>
            	<label for="check1" class="_8J-bZE _1tkDFt _1YWq5E _2i24Q8 _1Icwrf">
                  <input type="radio" name="address" readonly="" value="<?php echo $row->add_id ?>" checked><br>
                    
                    <div class="_2o59RR">
                        <div class="A1v2GV">
                            <div id="check" class="_1i74Oi _2Y3Dxm">
                                <p class="_22O2Xt"><span class="_3n0HwW"><?php echo $user_data->user_name; ?></span><span class="_rmbzw"><?php echo $row->address_type ?></span><span class="_2kSC_X _3n0HwW"><?php echo $user_data->phone; ?></span></p>
                                <span class="_22O2Xt GeUS8P">
                                	Locality - <?php echo $row->locality ?>,   Address-<?php echo $row->address ?>, City- <?php echo $row->city ?>, State- <?php echo $row->state?> Land Mark-<?php echo $row->landmark?>, 
	                            <span class="_3n0HwW">Alternate Phone -</span><?php echo $row->atternate_phone ?><br>
	                            <span class="_3n0HwW">Pin Code-</span><?php echo $row->pin_code ?></span>
                            </div>                            
                        </div>
                    </div>
                </label>

                <?php } ?>
            </div>
            <div onclick="delever()" class="_2AkmmA _I6-pD _7UHT_c" style="float:right;">Deliver Here</div></div><br><br><br><br>
            <div>
                <div class="-pqoEC"></div>
                <div onclick="addAddress(<?php echo $user_data->id ?>)" class="_2Y8lQ1"><img height="14" width="14" src=""  class="_2hT5Bw">Add a new address</div>
            </div>
        </div>
    </div>
</div>
<?php }else{ ?>
	<div>
        <div class="-pqoEC"></div>
        <div class="_2Y8lQ1"><img height="14" width="14" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiMyMTc1RkYiIGQ9Ik0xMS4yNSA2Ljc1aC00LjV2NC41aC0xLjV2LTQuNUguNzV2LTEuNWg0LjVWLjc1aDEuNXY0LjVoNC41Ii8+PHBhdGggZD0iTS0zLTNoMTh2MThILTMiLz48L2c+PC9zdmc+" class="_2hT5Bw">Add a new address</div>
    </div>
<?php } ?>

<div class="_1GRhLX _38vNoF undefined">
    <h3 class="_1fM65H _2RMAtd"><span class="_1Tmvyj">2</span><span class="_1_m52b">Order Summary</span></h3>
    <div id="order" class="_3K1hJZ">
        <div>
            <div>

 <?php foreach ($cart_data as $rows) {  ?>
    
    <div>
        <div class="_3ycxrs">
            <div class="PaJLWc">
                <a class="_2u3tZM" href="">
                	<img src="<?php echo '../admin/public/images/' . $rows->image; ?>" height="150" width="150"/></a>
                <div class="_3vIvU_">
                    <div class="_1Ox9a7"><a class="_325-ji _3ROAwx" ><?php echo $rows->name ?></a></div>
                    
                    <div class="_1RVXRC">
                        <div class="I8hxu4"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $rows->mrp ?></div>
                        <div class="bnm8KG"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $rows->discount ?></div>
                        <div class="xwg-dF"></div>
                        <div class="c8yCDe" id="offers-LSTMOBEWN63NBDSMVPGHVUHOP">
                           
                           
                        </div>
                    </div>
                </div>
                <div class="aCNg3Z">
                    <div class="_3aZm8l"><span>Free delivery in 3-4 days</span></div>
                    <ul class="_2103ss">
                        <li><span>10 Days Replacement Policy</span></li>
                    </ul>
                </div>
            </div>
            <div class="_3cto0P">
                
                <div class="_2K02N8 _2x63a8">                  
                    <div class="gdUKd9" tabindex="13" style="color:red;" onclick="remove_cart(<?php echo $rows->cart_id ?>);"><span>Remove</span></div>
                </div>
            </div>
        </div><hr>
    </div>
    <?php } ?>
    <div class="_3cCusG"><span>Order confirmation email will be sent to 
    	
    		<input type="email" value="<?php echo $user_data->email; ?>" class="_35lzyU" disabled="" placeholder="Enter your email ID">
    	
     </span>
	    <span id="to-payment">
	    	<div onclick="order_div()" class="_2AkmmA _2Q4i61 _7UHT_c" style="float:right;">CONTINUE</div>
	    </span>
	</div>

           </div>            
        </div>
    </div>
</div>



<div class="_1GRhLX _38vNoF undefined">
        <h3 class="_1fM65H _2RMAtd"><span class="_1Tmvyj">4</span><span class="_1_m52b">Payment Options</span></h3>
        <div class="_3K1hJZ">
            <div id="payment" class="foVA5Z">
                <div class="_1GRhLX _17_fE5">
                    <div>
                        <label for="PHONEPE" class="_8J-bZE _3C6tOa _2i24Q8">
                           <input type="radio" name="payment_type" value="payu" >
                            
                            <div class="_2o59RR">
                                <div><span class="_2eeQ1A">PayU</div>
                            </div>
                        </label>
                    
                        <label for="COD" class="_8J-bZE _3C6tOa _1syowc _2i24Q8 _1Icwrf">
                            <input type="radio" name="payment_type" value="caseondel">
                            
                            <div class="_2o59RR">
                                <div>Cash on Delivery
                                    
                                </div>
                            </div>
                        </label>
                    </div>
                </div>             
            </div>
            <center><input type="submit" class="_2AkmmA _I6-pD _7UHT_c" value="Confirm Order" style="text-align:center; "></center>

        </div>
    </div>

      
</form>


<div id="add_form" class="_1yf-9T">
                <div>
                    <div class="u0Atks">
                        <form class="form-horizontal" name="classimg_create" id="classimg_create"  >
                            
                             {!! csrf_field() !!} 
                    <input type="hidden" name="id" value="<?php echo $user_data->id ?>"> 
                            <span class="aGTn1j">ADD A NEW ADDRESS</span>
                            <div class="_3llGqN">
                      
                    <div class="uK6xOa">
                        <div class="_3fgAI3 Th26Zc">

                            <input type="text" class="_16qL6K _366U7Q" name="pincode" required="" maxlength="6" autocomplete="postal-code" tabindex="3" value="">
                            <label for="pincode" class="_20i8vs">Pincode</label>
                        </div>
                        <div class="_3fgAI3 Th26Zc">
                            <input type="text" class="_16qL6K _366U7Q" required="" name="locality" tabindex="4" value="">
                            <label for="addressLine2" class="_20i8vs">Locality</label>
                        </div>
                    </div>
                    <div class="uK6xOa _3g_m0J">
                        <div class="_1X5WZZ _1QG_7g">
                            <div class="_2mJu7M Th26Zc">
                                <textarea class="giyiJa _16qL6K _21icXK" name="address" rows="4" cols="10" tabindex="5" required="" autocomplete="street-address"></textarea>

                                <label for="addressLine1" class="_20i8vs">Address (Area and Street)</label>
                            </div>
                            <div class="_39_KcN _3-mqeJ">
                            </div>
                        </div>
                    </div>
                    <div class="uK6xOa">
                        <div class="_1X5WZZ _3fgAI3 _3g_m0J">
                            <div class="_2mJu7M Th26Zc">
                                <input type="text" class="_16qL6K _366U7Q" name="city" required="" autocomplete="city" tabindex="6" value="">
                                <label for="city" class="_20i8vs">City/District/Town</label>
                            </div><div class="_39_KcN _3-mqeJ">
                        </div>
                    </div>
                    <div>
                        <div class="M2VvVb">
                            <div class="MYSb8y">State</div>
                            <div class="_2uWdcR _3fgAI3 N25bMB">
                                <select class="_3092M2 _3fgAI3 N25bMB QoXnA9" name="state" required="" tabindex="7">
                                    <option value="" disabled="">--Select State--</option>
                                    <option value="Andaman &amp; Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>

                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                <span class="_1LBnEa _2KY_MK"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uK6xOa">
                    <div class="_3fgAI3 Th26Zc">
                        <input type="text" class="_16qL6K _366U7Q" name="landmark" autocomplete="off" tabindex="8" maxlength="200" value="">
                        <label for="landmark" class="_20i8vs">Landmark (Optional)</label>
                    </div>
                    <div class="_3fgAI3 Th26Zc">
                        <input type="text" class="_16qL6K _366U7Q" name="alternatePhone" autocomplete="off" tabindex="9" maxlength="10" value="">
                        <label for="alternatePhone" class="_20i8vs">Alternate Phone (Optional)</label>
                    </div>
                </div>
                <div class="_3XXwRR">
                    <p class="_2dwzAy">Address Type</p>
                    <div class="_3qg3HS">
                        <div>
                            <label for="HOME" class="_8J-bZE _2tcMoY">
                                <input type="radio" class="_2haq-9" name="locationType" readonly="" id="HOME" value="Home">
                                <div class="_6ATDKp">
                                </div>
                                <div class="_2o59RR">
                                    <span>Home</span>
                                </div>
                            </label>
                            <label for="WORK" class="_8J-bZE _2tcMoY">
                                <input type="radio" class="_2haq-9" name="locationType" readonly="" id="WORK" value="Work">
                                <div class="_6ATDKp">
                                </div>
                                <div class="_2o59RR">
                                    <span>Work</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="_1qbqu2 uK6xOa">
                    <input type="submit" name="submit" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
 
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script type="text/javascript">
$( document ).ready(function() {    
	$('#order').hide();
	$('#payment').hide();
    $('#add_form').hide();
});


function delever(){
	$('#delevery').hide();
	$('#order').show();
	$('#payment').hide();
    $('#add_form').hide();
}

function order_div(){
    $('#delevery').hide();
	$('#order').hide();
	$('#payment').show();
    $('#add_form').hide();
}

function remove_cart($id){
	 $.ajax({
                url: '../public/remove_cart?id=' + $id,
		        type: "get", 
		        dataType:'json',
		        contentType: false,  
		        processData: false,            
            success: function (response) {
            	location.reload();                                      
            }
          });
}


$(function () {
        $('#all_form').on('submit', function (e) {
          e.preventDefault();          
          $.ajax({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '../public/add/checkout',
            data: $('form').serialize(),
            success: function (response) {
            	var data_s = response;
            	console.log(data_s);
            	if(data_s == 'payu'){            	        		 
            	    window.location.href='payment';
            	}else if(data_s == 'caseondel'){
            		alert('Case on delevery!!')
            	    location.reload();
            	}else{
            		alert('Payment not processed next steps!!')
            	    location.reload();
            	}           	           
            }
          });
        });
      });

$(function () {
        $('#classimg_create').on('submit', function (e) {
          e.preventDefault();          
          $.ajax({            
            url: '../public/address/save',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            data: $('form').serialize(),
            success: function (response) {
                var data_s = response;              
                 alert("Address add successfully")
                 location.reload();
                                     
            }
          });
        });
      });


function addAddress($id){
    $('#add_form').show();
}


</script>



@endsection;