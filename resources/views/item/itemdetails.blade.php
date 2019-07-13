@extends('layouts.dashboard')
@section('content')
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<div class="col-sm-9 col-md-9 col-lg-9">

	<div class="banner-bootom-w3-agileits">	
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
						<?php foreach ($res_image as $rows) { ?>							
								<li data-thumb="<?php echo '../../admin/public/images/'. $rows->image; ?>">
									<div class="thumb-image">
										<img src="<?php echo '../../admin/public/images/'. $rows->image; ?>" data-imagezoom="true" class="img-responsive" alt=""> 
									</div>
								</li>								
						<?php } ?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="occasion-cart">
	<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
		<form id="form_add">
		
     
				<input type="hidden" name="item_id" value="<?php echo $res[0]->item_id; ?>" />
        <input type="hidden" name="name" value="<?php echo $res[0]->name; ?>" />
        <input type="hidden" name="discount" value="<?php echo $res[0]->mrp_aft_dis; ?>" />
        <input type="hidden" name="mrp" value="<?php echo $res[0]->mrp; ?>" />
        <input type="hidden" name="image" value="<?php echo $res[0]->image; ?>" />
				
			<div class="col-md-12">
        <input class="btn btn-default"  name="submit" type="submit" value="Add To Cart">
            <!--  <button type="button" class="btn btn-default btn-lg" style="float:left; width:110px;">Add To Cart</button> -->
     <!--        <button class="btn btn-default btn-lg" style="float:left; width:110px;">Add To Cart</button> -->
            <!-- <button class="btn btn-default btn-lg" style="float:right; width:110px;">Buy Now</button> -->
            
        </div>
			
		</form>
	</div>



</div>



			</div>


			<div class="col-md-7 single-right-left simpleCart_shelfItem">

              <div class="_2Cl4hZ">
   <div class="_1QnomP">      
   <div class="_29OxBi">
      <div>
         <h1 class="_9E25nV">
            <span class="_35KyD6">
              <?php echo $res[0]->name; ?>
            </span>
         </h1>
      </div>
     <!--  <div>
         <div class="_3ors59">
            <div class="niH0FQ">
               <span id="productRating_undefined_MOBF47DRA4RG4R2R_" class="_2_KrJI">
                  <div class="hGSR34 _2beYZw">
                    
                  </div>
               </span>
               <span class="_38sUEc"><span><span>493 Ratings&nbsp;</span><span class="_1VpSqZ">&amp;</span><span>&nbsp;72 Reviews</span></span></span>
            </div>
         </div>
         <span class="_3V7-QV _55FW5e"><img height="21" src="//img1a.flixcart.com/www/linchpin/fk-cp-zion/img/fa_8b4b59.png" class="gYMg9u"></span>
      </div> -->
     
      <div class="_3iZgFn">
         <div class="_2i1QSc">
            <div class="_1uv9Cb">
               <div class="_1vC4OE _3qQ9m1"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $res[0]->mrp_aft_dis; ?> </div>
               <div class="_3auQ3N _1POkHg"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $res[0]->mrp; ?>
               </div>               
               <div class="VGWI6T _1iCvwn" style="display:inline; color: #388e3c;"><span><?php echo $res[0]->discount; ?>&nbsp;Off</span></div>
            </div>
         </div>
         
      </div>
   </div>

  

 <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Item Code</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->code; ?>
               </li>
              
            </ul>
         </div>
         
      </div>
   </div><br>

   <div class="rPoo01">
   <div class="row">
    <form id="del_sub">
    <div class="col-sm-3 col-md-3 col-lg-3">
    <span id="Color" class="_1lwQLq">Delivery</span>
    </div>
     <div class="col-sm-7 col-md-7 col-lg-7">
        <input type="hidden" name="item_id" id="item_id" value="<?php echo $res[0]->item_id; ?>">
       <input type="text" name="delivery" id="delivery" placeholder="Enter Delivery Pincode" style="margin-left:10%;">
 
    </div>
     <div class="col-sm-2 col-md-2 col-lg-2">
    <input type="submit" value="Check">
    </div>
  </form>
   </div>
     <div id="target_id" style="color:red;"></div>







      <!-- <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
          <div clas="row">
            <div class="col-sm-5 col-md-5 col-lg-5">
            <span id="Color" class="_1lwQLq">Delivery</span>
          </div>
            <form id="del_sub">
              
              <input type="hidden" name="item_id" id="item_id" value="<?php echo $res[0]->item_id; ?>">
               <div class="col-sm-5 col-md-5 col-lg-5">
              <input type="text" name="delivery" id="delivery" placeholder="Enter Delivery Pincode">
              </div>
              <div class="col-sm-2 col-md-2 col-lg-2">
              <input type="submit" value="Check">
            </div>
            </form>

         </div>
         <div id="target_id" style="color:red;"></div>
       </div>
      </div> -->
   </div>
   
  
   <?php if($res[0]->sub_cat_name == 'Mobile'){ ?>
   <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      <div class="_2b7gqe">
         <div class="_3h7IGd">Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories</div>
      </div>
   </div>
   <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Color</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->mob_colore; ?>
               </li>
              
            </ul>
         </div>
         
      </div>
   </div>  
   
   <div class="_2KVF1P">
      <div class="g2dDAR flex">
         <div class="_2hqjdd">Highlights</div>
         <div class="_3WHvuP">
            <ul>
               <li class="_2-riNZ"><?php echo $res[0]->mob_ram; ?> | Expandable Upto 256 GB</li>
               
            </ul>
         </div>
      </div>      
   </div>  

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Product Description</span></div>
         <div class="_36fS1V"><?php echo $res[0]->mob_prd_description; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Mobile Options</span></div>
         <div class="_36fS1V"><?php echo $res[0]->mob_option; ?>. </div>
      </div>
   </div>
   
   <?php } else if($res[0]->sub_cat_name == 'Laptop'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      <div class="_2b7gqe">
         <div class="_3h7IGd">Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories</div>
      </div>
   </div>
   <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Old Price</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->laptop_old_price; ?>
               </li>
              
            </ul>
         </div>
         
      </div>
   </div>    

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Operating System</span></div>
         <div class="_36fS1V"><?php echo $res[0]->laptop_operating_system; ?>. </div>
      </div>
   </div>
   
   <?php } else if($res[0]->sub_cat_name == 'Desktop'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      <div class="_2b7gqe">
         <div class="_3h7IGd">Brand Warranty of 1 Year Available for Mobile and 6 Months for Accessories</div>
      </div>
   </div>
   <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Hurry Up</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->desktop_hurry; ?>
               </li>
              
            </ul>
         </div>
         
      </div>
   </div>  
   
  <?php } else if($res[0]->sub_cat_name == 'Footwear'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
   <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Color</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->shoes_color; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>
   <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Size</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->shoes_size; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>  
   <?php } else if($res[0]->sub_cat_name == 'Top Wear'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Size</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->top_wear_size; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>     
   
   <?php } else if($res[0]->sub_cat_name == 'Entrance exams'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
   <?php } else if($res[0]->sub_cat_name == 'Academic'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
  <?php } else if($res[0]->sub_cat_name == 'Indian writing'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
   <?php } else if($res[0]->sub_cat_name == 'Biographies'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
   <?php } else if($res[0]->sub_cat_name == 'Business'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
   <?php } else if($res[0]->sub_cat_name == 'Comicss'){  ?>

    <div class="_2sVT0Y">
      <div class="_2dlDRh">
         <div class="_3lDJ1K"><?php echo $res[0]->brand_name; ?></div>
      </div>
      
   </div>
     <div class="rPoo01">
      <div class="_37KLG6 col col-6-12">
         <div class="_2a2WU_">
            <span id="Color" class="_1lwQLq">Auther</span>
            <ul class="eaKBCI">
               <li class="_3XkO0t" id="swatch-0-color">
                 <?php echo $res[0]->book_auther; ?>
               </li>              
            </ul>
         </div>
         
      </div>
   </div>

   <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>More Details</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_more_details; ?>. </div>
      </div>
   </div>

    <div>
      <div class="_2tFX2Q">
         <div class="_2OAbe2"><span>Book Discription</span></div>
         <div class="_36fS1V"><?php echo $res[0]->book_discription; ?>. </div>
      </div>
     
   
   
   <?php } ?>


   <div class="MocXoX">
      <div class="_2GiuhO">Specifications</div>
      <div>
         <div>
            <div class="_3Rrcbo V39ti-">
               <div class="_2RngUh">
                  <div class="_2lzn0o">General</div>
                  <ul>
                     <li class="_3_6Uyw row">
                        <!-- <div class="_3-wDH3 col col-3-12">In The Box</div> -->
                        <ul class="_2k4JXJ col col-9-12">
                           <li class="_3YhLQA"><?php echo $res[0]->specification; ?></li>
                        </ul>
                     </li>                   
                  </ul>
               </div>     
         </div>
      </div>
   </div>   
</div>

<div class="MocXoX">
      <div class="_2GiuhO">Highlight</div>
      <div>
         <div>
            <div class="_3Rrcbo V39ti-">
               <div class="_2RngUh">                 
                  <ul>
                     <li class="_3_6Uyw row">
                        <!-- <div class="_3-wDH3 col col-3-12">In The Box</div> -->
                        <ul class="_2k4JXJ col col-9-12">
                           <li class="_3YhLQA"><?php echo $res[0]->highlight; ?></li>
                        </ul>
                     </li>                   
                  </ul>
               </div>     
         </div>
      </div>
   </div>   
</div>

<div class="MocXoX">
      <div class="_2GiuhO">services</div>
      <div>
         <div>
            <div class="_3Rrcbo V39ti-">
               <div class="_2RngUh">                 
                  <ul>
                     <li class="_3_6Uyw row">
                        <!-- <div class="_3-wDH3 col col-3-12">In The Box</div> -->
                        <ul class="_2k4JXJ col col-9-12">
                           <li class="_3YhLQA"><?php echo $res[0]->services; ?></li>
                        </ul>
                     </li>                   
                  </ul>
               </div>     
         </div>
      </div>
   </div>   
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
</div>

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
</script>

<script type="text/javascript">
$(function () {
        $('#form_add').on('submit', function (e) {
         
          e.preventDefault();
          $.ajax({
            type: 'get',
            url: '../add/cart',
            data: $('form').serialize(),
            success: function (response) {
              var data_s = response;
              console.log(data_s);
              if(data_s == '1'){
                alert("Please login first!!");
              }else if(data_s == '0'){
                 alert("Product not add in cart!!")
              }else{
                window.location.href = 'cart_list'
              }                                      
            }
          });
        });
      });
</script>


	
@endsection