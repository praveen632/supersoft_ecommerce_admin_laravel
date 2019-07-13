@extends('layouts.dashboard')
@section('content')
<?php if(count($data1) > '0') { ?>

<div class="TFpAof">
    <div class="_3YIJgh"><span class="_1WMqsr">My Cart</span>
        <div class="_1TQMJE">
            <div class="_3Oywxf">
                <div class="_2CeYHY _1udgbK"></div>
                <div class="_2my7m5">
                    <div class="_2IqPSX _1L003Y">
                    <form autocomplete="off" class="EJrIpC" id="del_sub">
                        <svg width="12" height="12" viewBox="0 0 9 12" class="_3VH2pM" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#2874f0" class="_16TkYi" d="M4.2 5.7c-.828 0-1.5-.672-1.5-1.5 0-.398.158-.78.44-1.06.28-.282.662-.44 1.06-.44.828 0 1.5.672 1.5 1.5 0 .398-.158.78-.44 1.06-.28.282-.662.44-1.06.44zm0-5.7C1.88 0 0 1.88 0 4.2 0 7.35 4.2 12 4.2 12s4.2-4.65 4.2-7.8C8.4 1.88 6.52 0 4.2 0z" fill-rule="evenodd"></path>
                        </svg>
                        
                        	<input type="hidden" name="item_id" id="item_id" value="<?php echo $data1[0]->item_id; ?>">
                            <input type="text" id="delivery" name="delivery" class="_3X4tVa" placeholder="Enter Delivery Pincode" value=""  >
                        
                        <div class="_2VTdOs _2VB0Iw _1udgbK">
                            <svg class="_2zN0mv" viewBox="25 25 50 50">
                                <circle stroke="#0057e7" class="_1VgS7d" cx="50" cy="50" r="10" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
                            </svg>
                        </div><input type="submit" value="Check">
                    </form>
                     <div id="target_id" style="color:red;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php foreach ($data1 as $rows) { ?>
    
    <div>
        <div class="_3ycxrs">
            <div class="PaJLWc">
                <a class="_2u3tZM" href="">
                	<img src="<?php echo '../../admin/public/images/' . $rows->image; ?>" height="150" width="150"/></a>
                <div class="_3vIvU_">
                    <div class="_1Ox9a7"><a class="_325-ji _3ROAwx" ><?php echo $rows->name ?></a></div>
                    
                    <div class="_1RVXRC">
                        <div class="I8hxu4"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $rows->mrp ?></div>
                        <div class="bnm8KG"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $rows->discount ?></div>
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
    <div class="_2qUgWb _23Wk5T">
        <div class="_2zqhDs _1lD380" style="left: auto;">
            <div class="_2CQPOE">
                <form method="post" action="{{ url('/checkout') }}">
                    {!! csrf_field() !!} 
                    <input type="hidden" name="user_id" value="<?php echo $data1[0]->user_id; ?>">
                    <button class="_2AkmmA _14O7kc _7UHT_c" tabindex="20"><span>Place Order</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }else{  
	echo "No Data";
}?>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(function () {
        $('#del_sub').on('submit', function (e) {
          e.preventDefault();         
          $.ajax({
            type: 'get',
            url: '../check_delivery',
            data: $('form').serialize(),
            success: function (response) {
              var data_s = response;
              console.log(data_s);
              if(data_s == '1'){
                var results = "Valid delivery address"
                $('#target_id').html(results);
              }else{
                var results = "InValid delivery address"
                $('#target_id').html(results);
              }                        
            }
          });
        });
      });


function remove_cart($id){
	 $.ajax({
                url: '../remove_cart?id=' + $id,
		        type: "get", 
		        dataType:'json',
		        contentType: false,  
		        processData: false,            
            success: function (response) {
            	location.reload();                                      
            }
          });
}
</script>
@endsection;