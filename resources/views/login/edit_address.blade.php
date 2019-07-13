@extends('layout_setting.dashboard')
@section('content')

<div class="_5tT1ZC">
	<div class="bfHz-X">
		<div class="_1GRhLX _2F3XAu">
			<span class="_985Oh_">Manage Addresses</span>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/address_manage')?>">View List</a>
			<div>
				<div class="_1yf-9T">
				<div>
					<div class="u0Atks">
						<form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/address/update') }}" enctype="multipart/form-data" >
							
							 {!! csrf_field() !!}  
							<span class="aGTn1j">ADD A NEW ADDRESS</span>
							<div class="_3llGqN">
						<input type="hidden" name="id" value="<?php echo $data->add_id; ?>">		
					<div class="uK6xOa">
						<div class="_3fgAI3 Th26Zc">

							<input type="text" class="_16qL6K _366U7Q" name="pincode" required="" maxlength="6" autocomplete="postal-code" tabindex="3" value="<?php echo $data->pin_code; ?>">
							<label for="pincode" class="_20i8vs">Pincode</label>
						</div>
						<div class="_3fgAI3 Th26Zc">
							<input type="text" class="_16qL6K _366U7Q" required="" name="locality" tabindex="4" value="<?php echo $data->locality; ?>">
							<label for="addressLine2" class="_20i8vs">Locality</label>
						</div>
					</div>
					<div class="uK6xOa _3g_m0J">
						<div class="_1X5WZZ _1QG_7g">
							<div class="_2mJu7M Th26Zc">
								<textarea class="giyiJa _16qL6K _21icXK" name="address" rows="4" cols="10" tabindex="5" required="" autocomplete="street-address"><?php echo $data->address; ?></textarea>

								<label for="addressLine1" class="_20i8vs">Address (Area and Street)</label>
							</div>
							<div class="_39_KcN _3-mqeJ">
							</div>
						</div>
					</div>
					<div class="uK6xOa">
						<div class="_1X5WZZ _3fgAI3 _3g_m0J">
							<div class="_2mJu7M Th26Zc">
								<input type="text" class="_16qL6K _366U7Q" name="city" required="" autocomplete="city" tabindex="6" value="<?php echo $data->city; ?>">
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
						<input type="text" class="_16qL6K _366U7Q" name="landmark" autocomplete="off" tabindex="8" maxlength="200" value="<?php echo $data->landmark; ?>">
						<label for="landmark" class="_20i8vs">Landmark (Optional)</label>
					</div>
					<div class="_3fgAI3 Th26Zc">
						<input type="text" class="_16qL6K _366U7Q" name="alternatePhone" autocomplete="off" tabindex="9" maxlength="10" value="<?php echo $data->atternate_phone; ?>">
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
					<button type="submit" class="btn btn-info pull-right">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
<div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection;