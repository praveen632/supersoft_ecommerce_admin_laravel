@extends('layout_setting.dashboard')
@section('content')

            <div class="_5tT1ZC">
              <div class="bfHz-X">
                <div class="_1GRhLX">
                  <div class="_1JMKW3">
                    <div class="l022CW">
                      <div class="_2aK_Hc">
                        <span class="_10it6k">Personal Information</span>
                       <!--  <span class="_1x4IU1">Edit</span> -->
                      </div>
                      <form>
                        <div class="_2kN0A- row">
                          <div class="_3wj6q3">
                            <div class="Th26Zc">
                              <input type="text" class="_16qL6K _2pf-sU _366U7Q" name="firstName" required="" disabled="" autocomplete="name" tabindex="1" value="<?php echo $data1->user_name; ?>">
                            </div>
                          </div>                          
                        </div>

                        <!-- <div class="yt2AKW"> Your Gender </div>
                        <div>
                          <label for="Male" class="_8J-bZE _2FAt1l _2pmKiA _2tcMoY">
                            <input type="radio" disabled="" class="_2haq-9" name="gender" readonly="" id="Male" value="on">
                            <div class="_6ATDKp">
                            </div>
                            <div class="_2o59RR">
                              <span disabled="" tabindex="3">Male</span>
                            </div>
                          </label>
                          <label for="Female" class="_8J-bZE _2FAt1l _2pmKiA _2tcMoY">
                            <input type="radio" disabled="" class="_2haq-9" name="gender" readonly="" id="Female" value="on">
                            <div class="_6ATDKp">
                            </div>
                            <div class="_2o59RR">
                              <span disabled="" tabindex="4">Female</span>
                            </div>
                          </label>
                        </div> -->
                      </form>
                    </div>
                    <div>
                      <div>
                        <div class="ubrbk7">
                          <div class="_3oYEid">
                            <span class="MJ2tO_">Email Address</span>
                            <!-- <a class="_7qszba oZoRPi" href="#">Edit</a> -->
                            <!-- <a class="oZoRPi" href="#">Change Password</a> -->
                          </div>
                          <form>
                            <div class="_9eaqI8 row">
                              <div class="_2P6fHI">
                                <div class="Th26Zc">
                                  <input type="text" class="_16qL6K _3jqlFr _366U7Q" name="email" autocomplete="email" required="" disabled="" value="<?php echo $data1->email; ?>">
                                </div>
                              </div>
                            </div>

                          </form>
                        </div>
                      </div>
                      <div>
                        <div class="ubrbk7">
                          <div class="_3oYEid">
                            <span class="MJ2tO_">Mobile Number</span>
                            <!-- <a class="_7qszba oZoRPi" href="#">Edit</a> -->
                          </div>
                          <form>

                            <div class="_9eaqI8 row">
                              <div class="_2P6fHI">
                                <div class="Th26Zc">
                                  <input type="text" class="_16qL6K _3jqlFr _366U7Q" name="mobileNumber" autocomplete="tel" required="" disabled="" value="<?php echo $data1->phone; ?>">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                   
<!-- <div class="_3uzK7o">Deactivate Account</div> -->
</div>
<div>

</div>
</div>
</div>
</div>
</div>
</div>
<br>
             
@endsection