@extends('layouts.dashboard')
@section('content')

<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Item</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/item')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/item/update') }}" enctype="multipart/form-data">
         {!! csrf_field() !!}        
      <div class="box-body">
         <input type="hidden" class="form-control" name="id" value="<?php echo $data->item_id;?>">       
         <div class="form-group{{ $errors->has('prodt_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
          <div class="col-sm-4">            
              <select  id="prodt_cat" class="form-control" name="prodt_cat" >
                <option value="">Select</option>
                <?php foreach($data_p_c as $row) {         
                 ?> 
                 <option  <?php if($row->id == $data->prd_cat_id){ ?> selected="selected" <?php }?> value="<?php echo $row->id ?>"><?php echo $row->pdt_cat_name ?></option>
                 <?php } ?>          
              </select>          
         </div>  

          <label for="inputEmail3" class="col-sm-2 control-label">Sub Category</label>
          <div class="col-sm-4">
               <select id="prodt_sub_cat" class="form-control" name="prodt_sub_cat" >
                <option value="">Select</option>
                <?php foreach($data_sub_ct as $row) {         
                 ?> 
                 <option <?php if($row->sub_cat_id == $data->sub_cat_id){ ?> selected="selected" <?php }?> value="<?php echo $row->sub_cat_id ?>"><?php echo $row->sub_cat_name ?></option>
                 <?php } ?>          
              </select>          
          </div>                      
         </div>

     

      <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>
          <div class="col-sm-4">             
              <select class="form-control" id="brand" name ="brand" >
              <?php foreach($data_brand as $row) {         
                 ?> 
                 <option <?php if($row->brand_id == $data->brand_id){ ?> selected="selected" <?php }?> value="<?php echo $row->brand_id ?>"><?php echo $row->brand_name ?></option>
                 <?php } ?>
              </select>          
         </div>
         <label for="inputEmail3" class="col-sm-2 control-label">Package</label>
          <div class="col-sm-4">
             <select class="form-control" id="package" name ="package" >
               <option  <?php if('N1' == $data->package){ ?> selected="selected" <?php }?>  value="N1">N1</option>
               <option  <?php if('N2' == $data->package){ ?> selected="selected" <?php }?> value="N2">N2</option>
               <option  <?php if('P1' == $data->package){ ?> selected="selected" <?php }?> value="P1">P1</option>
               <option  <?php if('P2' == $data->package){ ?> selected="selected" <?php }?> value="P2">P2</option>
              </select> 
        </div>                         
      </div>

      <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">         
         <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="name" value="<?php echo $data->name; ?>">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
        </div>                         
      

            
         <label for="inputEmail3" class="col-sm-2 control-label">MRP</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="mrp" value="<?php echo $data->mrp; ?>">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('mrp') }}</strong>
                </span>
                @endif
        </div>                         
      </div>

      <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">         
         <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="discount" value="<?php echo $data->discount; ?>">
                @if ($errors->has('discount'))
                <span class="help-block">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
                @endif
        </div>                         
              
         <label for="inputEmail3" class="col-sm-2 control-label">BV Product</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="bv" value="<?php echo $data->BV; ?>">
                @if ($errors->has('bv'))
                <span class="help-block">
                    <strong>{{ $errors->first('bv') }}</strong>
                </span>
                @endif
        </div>                         
      </div>      

      <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">         
         <label for="inputEmail3" class="col-sm-2 control-label">Code</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="code" value="<?php echo $data->code; ?>">
                @if ($errors->has('code'))
                <span class="help-block">
                    <strong>{{ $errors->first('code') }}</strong>
                </span>
                @endif
        </div>                               
      </div>

      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
          <div class="col-sm-4">
             <input type="file" class="form-control" name="image[]" value="" required>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
        </div> 
        <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
          <div class="col-sm-4">
             <input type="file" class="form-control" name="image[]" value="{{ old('image') }}" required>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
           </div>                         
        </div>     

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-4">
               <input type="file" class="form-control" name="image[]" value="{{ old('image') }}" required>
                  @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
          </div> 
          <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-4">
               <input type="file" class="form-control" name="image[]" value="{{ old('image') }}" required>
                  @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
          </div>                       
        </div>


        <div class="form-group{{ $errors->has('services') ? ' has-error' : '' }}">         
         <label for="inputEmail3" class="col-sm-2 control-label">Services</label>
          <div class="col-sm-10">
             <textarea type="text" class="form-control" name="services" value=""><?php echo $data->services; ?></textarea>
                @if ($errors->has('services'))
                <span class="help-block">
                    <strong>{{ $errors->first('services') }}</strong>
                </span>
                @endif
        </div>                         
        </div>
        <div class="form-group{{ $errors->has('highlight') ? ' has-error' : '' }}">       
         <label for="inputEmail3" class="col-sm-2 control-label">Highlight</label>
          <div class="col-sm-10">
             <textarea type="text" class="form-control" name="highlight" value=""><?php echo $data->highlight; ?></textarea>
                @if ($errors->has('highlight'))
                <span class="help-block">
                    <strong>{{ $errors->first('highlight') }}</strong>
                </span>
                @endif
        </div>                         
      </div>


       <div class="form-group{{ $errors->has('specification') ? ' has-error' : '' }}">       
         <label for="inputEmail3" class="col-sm-2 control-label">Specification</label>
          <div class="col-sm-10">
             <textarea type="text" class="form-control" name="specification" value=""><?php echo $data->specification; ?></textarea>
                @if ($errors->has('specification'))
                <span class="help-block">
                    <strong>{{ $errors->first('specification') }}</strong>
                </span>
                @endif
        </div>                         
      </div>

     
     
<?php 
foreach ($data_sub_ct as $rows) {

 if($rows->sub_cat_id == $data->sub_cat_id){
  
  if($rows->sub_cat_name == 'Camera'){  ?>

    <div  id = "camera" class="Donation-main-w3ls">
         
       
       <div class="clear"></div>
       <div class="clear"></div>
       
         </div>

<?php }else if($rows->sub_cat_name == 'Mobile'){ ?>
   <!-- Mobile page -->
      <div  id = "mobile" class="Donation-main-w3ls">     
      <div class="main">
       <div class="form-left-to-w3l">
        <input type="text" name="mob_ram" value="<?php echo $data->mob_ram; ?>"  placeholder="Ram" >
      </div>
      <div class="form-add-to-w3ls">
        <input type="text" name="mob_colore" value="<?php echo $data->mob_colore; ?>" placeholder="Colore" />
       
      </div>
      </div>      
       <div class="form-control-w3l">
        <textarea name="mob_option"  placeholder="Option" ><?php echo $data->mob_option; ?></textarea>
      </div>
      
      <div class="form-control-w3l">
        <textarea name="mob_prd_description" placeholder="Product Description" ><?php echo $data->mob_prd_description; ?></textarea>
      </div>
      
      </div>


<?php }else if($rows->sub_cat_name == 'Laptop'){ ?>
<div  id = "laptop" class="Donation-main-w3ls">
        <div class="main" >
        <div class="form-left-to-w3l">
          <input type="text" name="laptop_operating_system" value="<?php echo $data->laptop_operating_system; ?>"  placeholder="Operating System" >
        </div>
       
      </div>
      
      <div class="clear"></div>
      <div class="clear"></div>
     
    </div>
<?php }else if($rows->sub_cat_name == 'Desktop'){ ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
       
      </div>
     
      <div class="clear"></div>

      <div class="clear"></div>

      
      </div>


<?php  }else if($rows->sub_cat_name == 'Tv'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        
      </div>
      
      <div class="clear"></div>

      <div class="clear"></div>

      
      </div>

<?php  }else if($rows->sub_cat_name == 'Footwear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
       
      </div>
    
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="shoes_color" value="<?php echo $data->shoes_color; ?>" placeholder="color">
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="shoes_size" value="<?php echo $data->shoes_size; ?>" placeholder="Size" >
        </div>
      </div>
      <div class="clear"></div>

      <div class="clear"></div>

      
      </div>
<?php  }else if($rows->sub_cat_name == 'Top Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
       <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>
      </div>


<?php  }else if($rows->sub_cat_name == 'Bottom Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>
      </div>


<?php  }else if($rows->sub_cat_name == 'Inner Wear & Sleep Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>    
      </div>


<?php  }else if($rows->sub_cat_name == 'Western Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>    
      </div>


<?php  }else if($rows->sub_cat_name == 'Lingerie, Sleep & Swimwear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
         <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>        
      </div>
      </div>


<?php  }else if($rows->sub_cat_name == 'Sports Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>
      </div>


<?php  }else if($rows->sub_cat_name == 'Ethnic Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>
      </div>

      
<?php  }else if($rows->sub_cat_name == 'Winter & Seasonal Wear'){  ?>

 <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry" value="<?php echo $data->desktop_hurry; ?>" placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" value="<?php echo $data->top_wear_size; ?>" placeholder="Size" >
        </div>
      </div>      
      </div>

<?php  }else if($rows->sub_cat_name == 'Entrance exams'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>


<?php  }else if($rows->sub_cat_name == 'Academic'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>
<?php  }else if($rows->sub_cat_name == 'Indian writing'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>

<?php  }else if($rows->sub_cat_name == 'Biographies'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>

<?php  }else if($rows->sub_cat_name == 'Business'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>
      
<?php  }else if($rows->sub_cat_name == 'Comics'){  ?>

 <!-- Book -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther" value="<?php echo $data->book_auther; ?>" placeholder="Hurry Message" >
        </div>        
      </div> 
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="Product Description" ><?php echo $data->book_more_details; ?></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Product Description" ><?php echo $data->book_discription; ?></textarea>
      </div>     
      </div>
<?php } } } ?>
    
          
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
    </div>
      <!-- /.box-footer -->
    </form>
  </div> 
   

@endsection




