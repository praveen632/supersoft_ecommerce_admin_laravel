@section('content')
<?php 
$data_top = Session::get('data_top');
$data_hot = Session::get('data_hot');
 ?>


    <div class="col-md-9 col-lg-9">
    <div class="w3l_banner_nav_right">
            <section class="slider">
                <div class="flexslider">
                    
                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-752px, 0px, 0px);"><li class="clone" style="width: 752px; float: left; display: block;">
                            <div class="w3l_banner_nav_right_banner2">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li style="width: 752px; float: left; display: block;" class="flex-active-slide">
                            <div class="w3l_banner_nav_right_banner">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li style="width: 752px; float: left; display: block;" class="">
                            <div class="w3l_banner_nav_right_banner1">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li style="width: 752px; float: left; display: block;" class="">
                            <div class="w3l_banner_nav_right_banner2">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                    <li style="width: 752px; float: left; display: block;" class="clone">
                            <div class="w3l_banner_nav_right_banner">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
            </section>
            
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
     </div>
     </div>
    <!-- banner -->
    
<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Top Product</h3>
       <?php if(count($data_top) > '0'){ ?>
            
            <div class="agile_top_brands_grids">
                <?php foreach ($data_top as $rows) { ?>
                
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"></div>
                            <div onclick="location.href='<?php echo url('/item/details?id='.$rows->item_id) ?>'" class="agile_top_brand_left_grid1">
                                <figure >
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="<?php echo url('/item/details?id='.$rows->item_id) ?>"><img src="<?php echo '../admin/public/images/' . $rows->image; ?>" height="150" width="150"/></a>      
                                            <p><?php echo $rows->name ?></p>
                                            <h4><?php echo $rows->mrp ?> <span><?php echo $rows->discount ?></span></h4>
                                        </div>
                                        
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                
                <div class="clearfix"> </div>
            </div>
            <?php }else{ ?>
             <h3>Product Is not avilable</h3>
            <?php }?> 
               
        </div>
    </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
    <div class="top-brands">
        <div class="container">
            <h3>Hot Offers</h3>
       <?php if(count($data_hot) > '0'){ ?>
            
            <div class="agile_top_brands_grids">
                <?php foreach ($data_hot as $rows) { ?>
                
                <div class="col-md-3 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"></div>
                            <div onclick="location.href='<?php echo url('/item/details?id='.$rows->item_id) ?>'" class="agile_top_brand_left_grid1">
                                <figure >
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="<?php echo url('/item/details?id='.$rows->item_id) ?>"><img src="<?php echo '../admin/public/images/' . $rows->image; ?>" height="150" width="150"/></a>      
                                            <p><?php echo $rows->name ?></p>
                                            <h4><?php echo $rows->mrp ?> <span><?php echo $rows->discount ?></span></h4>
                                        </div>
                                        
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                
                <div class="clearfix"> </div>
            </div>
            <?php }else{ ?>
             <h3>Product Is not avilable</h3>
            <?php }?> 
               
        </div>
    </div>
<!-- //fresh-vegetables -->
<!-- newsletter -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script type="text/javascript">
    $(window).load(function(){
                  $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                      $('body').removeClass('loading');
                    }
                  });
                });

   </script> 




@endsection