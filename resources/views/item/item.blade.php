@extends('layouts.dashboard')
@section('content')


<div class="col-md-9 col-lg-9">
    <div class="w3l_banner_nav_right">
<div class="top-brands">
       
            <h3>Product</h3>
            <div class="agile_top_brands_grids">
            	<?php foreach ($data1 as $rows) {  ?>
            	
                <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"></div>
                            <div onclick="location.href='<?php echo url('/item/details?id='.$rows->item_id) ?>'" class="agile_top_brand_left_grid1">
                                <figure >
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="<?php echo url('/item/details?id='.$rows->item_id) ?>"><img src="<?php echo '../../admin/public/images/' . $rows->image; ?>" height="150" width="150"/></a>      
                                            <p><?php echo $rows->name ?></p>
                                            <h4><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $rows->mrp_aft_dis ?> 

                                                <span><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $rows->mrp ?></span>
                                                <p style="display:inline; color: #388e3c;"><?php echo $rows->discount ?>&nbsp;Off</p>
                                            </h4>
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
        
    </div>
</div>
</div>
</div>
</div>
@endsection