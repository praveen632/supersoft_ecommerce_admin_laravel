<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.no-padding{
  padding:0px;
}
.glyphicon-icon-rpad .glyphicon,.glyphicon-icon-rpad .glyphicon.m8,.fa-icon-rpad .fa,.fa-icon-rpad .fa.m8{ padding-right:8px; }
.glyphicon-icon-lpad .glyphicon,.glyphicon-icon-lpad .glyphicon.m8,.fa-icon-lpad .fa,.fa-icon-lpad .fa.m8{ padding-left:8px; }
.glyphicon-icon-rpad .glyphicon.m5,.fa-icon-rpad .fa.m5{ padding-right:5px; }
.glyphicon-icon-lpad .glyphicon.m5,.fa-icon-lpad .fa.m5{ padding-left:5px; }
.glyphicon-icon-rpad .glyphicon.m12,.fa-icon-rpad .fa.m12{ padding-right:12px; }
.glyphicon-icon-lpad .glyphicon.m12,.fa-icon-lpad .fa.m12{ padding-left:12px; }
.glyphicon-icon-rpad .glyphicon.m15,.fa-icon-rpad .fa.m15{ padding-right:15px; }
.glyphicon-icon-lpad .glyphicon.m15,.fa-icon-lpad .fa.m15{ padding-left:15px; }



ul.nav-menu-list-style .nav-header .menu-collapsible-icon{position:absolute; right:3px; top:16px; font-size:9px; }



ul.nav-menu-list-style{
  margin:0;
}
ul.nav-menu-list-style .nav-header{
  border-top:1px solid #FFFFFF;
  border-bottom:1px solid #e8e8e8;
  display:block;
  margin:0;
  line-height:42px;
  padding:0 8px;
  font-weight:600;
}
ul.nav-menu-list-style> li{
  position:relative; }
ul.nav-menu-list-style> li a{
  border-top:1px solid #FFFFFF;
  border-bottom:1px solid #e8e8e8;
  padding:0 10px;
  line-height:32px;
}
ul.nav-menu-list-style> li:first-child a{
}


ul.nav-menu-list-style{list-style:none; padding:0px; margin:0px;}
ul.nav-menu-list-style li .badge,ul.nav-menu-list-style li .pull-right,ul.nav-menu-list-style li span.badge,ul.nav-menu-list-style li label.badge{float:right; margin-top:7px;}
ul.bullets{list-style:inside disc}
ul.numerics{list-style:inside decimal}
.ul.kas-icon-aero{}
ul.kas-icon-aero li a:before{font-family: 'Glyphicons Halflings'; font-size:9px; content: "\e258"; padding-right:8px; }


</style>

<div class="container" >
<div class="row">
  <div class="col-md-3 col-lg-3">
    <div class="well no-padding">
        <div>
            <ul class="nav nav-list nav-menu-list-style">
                <?php foreach ($data as $key => $items){ ?>
                <li><label  class="tree-toggle nav-header glyphicon-icon-rpad">
                  <span class="glyphicon glyphicon-folder-close m5"></span>
                  <a href="<?php echo url('/product_list?id='.$items->id) ?>"><?php echo  $items->pdt_cat_name ?></a>
                            <span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></label>
                    <ul class="nav nav-list tree bullets">
                      <?php foreach ($data_s_c  as $key1=> $value){ 
                         if($items->id == $value->product_cat_id) {
                        ?>                   
                        <li><label class="tree-toggle nav-header"><a href="<?php echo url('/sub_product_list?id='.$value->sub_cat_id) ?>" ><?php echo $value->sub_cat_name; ?></a><span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></label>
                            <ul class="nav nav-list tree">
                                <?php foreach ($data_br  as $key1=> $val){
                                    if($val->sub_cat_id == $value->sub_cat_id) {
                                 ?>
                                        <li><a href="<?php echo url('/index/getitem?id='.$val->brand_id) ?>"><?php echo $val->brand_name; ?></a></li>
                                        
                                <?php } } ?>                                
                            </ul>
                        </li>
                        <?php } } ?>
                    </ul>
                </li>
                <?php } ?> 
                
                
            </ul>
        </div>
    </div>
    </div>
    


<script>
$('.tree-toggle').click(function () {   $(this).parent().children('ul.tree').toggle(200);
});
$(function(){
$('.tree-toggle').parent().children('ul.tree').toggle(200);
})
</script>



       

