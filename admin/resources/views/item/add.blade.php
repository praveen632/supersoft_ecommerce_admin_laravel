@extends('layouts.dashboard')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Add Item</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/item')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/item/save') }}" enctype="multipart/form-data">
         {!! csrf_field() !!}        
      <div class="box-body">
         <div class="form-group{{ $errors->has('prodt_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
          <div class="col-sm-4">            
              <select id="prodt_cat" class="form-control" name="prodt_cat" onchange="getsubcat(this.value)" >
                <option value="">Select</option>
                <?php foreach($data_p_c as $row) {         
                 ?> 
                 <option value="<?php echo $row->id ?>"><?php echo $row->pdt_cat_name ?></option>
                 <?php } ?>          
              </select>          
         </div>  

          <label for="inputEmail3" class="col-sm-2 control-label">Sub Category</label>
          <div class="col-sm-4">
              <select class="form-control" id="prodt_sub_cat" name ="prodt_sub_cat" onchange="getbrand(this.value );" onchange="divhideshow(this.value);"  >
              <option value="">Select</option>
              </select>          
          </div>                      
         </div>

     

      <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Brand</label>
          <div class="col-sm-4">             
              <select class="form-control" id="brand" name ="brand" >
               <option value="">Select</option>
              </select>          
         </div>
         <label for="inputEmail3" class="col-sm-2 control-label">Package</label>
          <div class="col-sm-4">
             <select class="form-control" id="package" name ="package" >
               <option value="N1">N1</option>
               <option value="N2">N2</option>
               <option value="P1">P1</option>
               <option value="P2">P2</option>
              </select> 
        </div>                         
      </div>

       <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">         
         <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
        </div>                         
      

            
         <label for="inputEmail3" class="col-sm-2 control-label">MRP</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="mrp" value="{{ old('mrp') }}">
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
             <input type="text" class="form-control" name="discount" value="{{ old('discount') }}">
                @if ($errors->has('discount'))
                <span class="help-block">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
                @endif
        </div>                         
              
         <label for="inputEmail3" class="col-sm-2 control-label">BV Product</label>
          <div class="col-sm-4">
             <input type="text" class="form-control" name="bv" value="{{ old('bv') }}">
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
             <input type="text" class="form-control" name="code" value="{{ old('code') }}">
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
             <input type="file" class="form-control" name="image[]" value="{{ old('image') }}">
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
        </div> 
        <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
          <div class="col-sm-4">
             <input type="file" class="form-control" name="image[]" value="{{ old('image') }}">
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
               <input type="file" class="form-control" name="image[]" value="{{ old('image') }}">
                  @if ($errors->has('image'))
                  <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
          </div> 
          <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-4">
               <input type="file" class="form-control" name="image[]" value="{{ old('image') }}">
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
             <textarea type="text" class="form-control" name="services" value="{{ old('services') }}"></textarea>
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
             <textarea type="text" class="form-control" name="highlight" value="{{ old('highlight') }}"></textarea>
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
             <textarea type="text" class="form-control" name="specification" value="{{ old('highlight') }}"></textarea>
                @if ($errors->has('specification'))
                <span class="help-block">
                    <strong>{{ $errors->first('specification') }}</strong>
                </span>
                @endif
        </div>                         
      </div>
     

       <!-- Camera page -->
       <div  id = "camera" class="Donation-main-w3ls">       
       <div class="clear"></div>
       <div class="clear"></div>     
         </div>


    <!-- Mobile page -->
      <div  id = "mobile" class="Donation-main-w3ls">     
      <div class="main">
       <div class="form-left-to-w3l">
        <input type="text" name="mob_ram"  placeholder="Ram" >
      </div>
      <div class="form-left-to-w3l">
        <input type="text" name="mob_colore" placeholder="Colore" />       
      </div>
      </div>     
      
      <div class="clear"></div>
      <div class="clear"></div>      
      <div class="form-control-w3l">
        <textarea name="mob_option" placeholder="Option" ></textarea>
      </div>
      
      <div class="form-control-w3l">
        <textarea name="mob_prd_description" placeholder="Product Description" ></textarea>
      </div>      
      </div>

      <!-- Laptop -->                    
      <div  id = "laptop" class="Donation-main-w3ls">  
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="laptop_operating_system"  placeholder="Operating System" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="laptop_old_price" placeholder="Old Price" >
        </div>
      </div>     
      <div class="clear"></div>
      <div class="clear"></div>     
       </div>


       <!-- Desktop -->
      <div  id = "desktop" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        
      </div>      
      <div class="clear"></div>
      <div class="clear"></div>    
      </div> 

      <!-- TV -->  

      <div  id = "tv" class="Donation-main-w3ls"> 
       <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>        
      </div>      
      <div class="clear"></div>
      <div class="clear"></div>    
      </div>


     <!--   Shoes -->  
     <div  id = "Footwear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>        
      </div>     

      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="shoes_color" placeholder="Color">
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="shoes_size" placeholder="Size" >
        </div>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>     
    </div>

    <!--   Top Wear -->  
     <div  id = "top-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>      
    </div>

    <!--   Bottom Wear -->  
     <div  id = "bottom-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div> 
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>       
      </div>
      <div class="clear"></div>
      <div class="clear"></div>     
    </div>

    <!--   Inner Wear -->  
     <div  id = "inner-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>        
      </div>
      <div class="clear"></div>
      <div class="clear"></div>     
    </div>

     <!--   Western Wear -->  
     <div  id = "western-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>      
      <div class="clear"></div>
      <div class="clear"></div>      
    </div>

    <!--   Lingerie, Sleep & Swimwear -->  
     <div  id = "lingerie-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>     
      <div class="clear"></div>

      <div class="clear"></div>

      
    </div>

    <!--  Ethnic Wear -->  
     <div  id = "ethnic-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>     
      <div class="clear"></div>
      <div class="clear"></div>    
    </div>

    <!--  Sport wear -->  
     <div  id = "sport-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
        <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>     
    </div>

    <!--  Winter & Seasonal Wear -->  
     <div  id = "winter-wear" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="desktop_hurry"  placeholder="Hurry Message" >
        </div>
       <div class="form-right-to-w3ls ">
          <input type="text" name="top_wear_size" placeholder="Size" >
        </div>
      </div>
      <div class="clear"></div>
      <div class="clear"></div>     
    </div>


    <!-- Entrance exams -->  
     <div  id = "entrance-exams" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>

     <!-- Academic -->  
     <div  id = "academic" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>

    <!-- Indian writing -->  
     <div  id = "indian-writing" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>

    <!-- Biographi -->  
     <div  id = "biographies" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>

     <!-- Busieness -->  
     <div  id = "busieness" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>

     <!-- Comics -->  
     <div  id = "comics" class="Donation-main-w3ls">
      <div class="main">
        <div class="form-left-to-w3l">
          <input type="text" name="book_auther"  placeholder="Auther" >
        </div>
       </div>
      <div class="form-control-w3l">
        <textarea name="book_more_details" placeholder="More Details" ></textarea>
      </div>
      <div class="form-control-w3l">
        <textarea name="book_discription" placeholder="Discription" ></textarea>
      </div>
    </div>
          
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
    </div>
      <!-- /.box-footer -->
    </form>
  </div> 
   
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">    
  $( document ).ready(function() {      
      $('#mobile').hide();
      $('#camera').hide();
      $('#laptop').hide();
      $('#desktop').hide();
      $('#tv').hide();
      $('#Footwear').hide();
      $('#top-wear').hide();
      $('#bottom-wear').hide();
      $('#inner-wear').hide();
      $('#western-wear').hide();
      $('#lingerie-wear').hide();
      $('#sport-wear').hide();
      $('#ethnic-wear').hide();
      $('#winter-wear').hide();
      $('#entrance-exams').hide();
      $('#academic').hide();
      $('#indian-writing').hide();
      $('#biographies').hide();
      $('#busieness').hide();
      $('#comics').hide();
   });

function getsubcat($id){          
    $.ajax({
        url: '../brand/getsubdata?id=' + $id,
        type: "get", 
        dataType:'json',
        contentType: false,  
        processData: false,                        
        success: function(response){           
               $("#prodt_sub_cat").attr('disabled', false);
               var $select = $('#prodt_sub_cat');
                //$select.find('option').remove();
                $.each(response,function(key, value)
                {
                    $select.append('<option value=' + value.sub_cat_id + ',' +value.sub_cat_name + '>' + value.sub_cat_name + '</option>'); // return empty
                });
        }
    });
  }


  function getbrand($id){
    var mystr = $id;
    var myarr = mystr.split(",");

console.log(myarr[1]);
if(myarr[1] == "Camera"){
  $('#camera').show();
  $('#mobile').hide();
  $('#laptop').hide();
  $('#desktop').hide();
  $('#tv').hide();
  $('#Footwear').hide();
  $('#top-wear').hide();
  $('#bottom-wear').hide();
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
  $('#ethnic-wear').hide();
  $('#winter-wear').hide();
  $('#entrance-exams').hide();
  $('#academic').hide();
  $('#indian-writing').hide();
  $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Mobile"){
  $('#mobile').show();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#desktop').hide();
  $('#tv').hide();
  $('#Footwear').hide();
  $('#top-wear').hide();
  $('#bottom-wear').hide();
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Laptop"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').show();
  $('#desktop').hide();
  $('#tv').hide();
  $('#Footwear').hide();
  $('#top-wear').hide();
  $('#bottom-wear').hide();
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Desktop"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#desktop').show();
  $('#tv').hide();
  $('#Footwear').hide();
  $('#top-wear').hide();
  $('#bottom-wear').hide();
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Tv"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').show();
  $('#desktop').hide();
  $('#Footwear').hide();
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide(); 
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Footwear"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').show(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Top"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').show();
  $('#bottom-wear').hide();
  $('#inner-wear').hide();
  $('#western-wear').hide(); 
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Bottom"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').show(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
  $('#ethnic-wear').hide();
  $('#winter-wear').hide();
  $('#entrance-exams').hide();
  $('#academic').hide();
  $('#indian-writing').hide();
  $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Inner"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').show();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Western"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').show();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Lingerie"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').show();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Sports"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').show();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
    $('#busieness').hide();
    $('#comics').hide();
}else if(myarr[1] == "Ethnic"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').show();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Winter"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').show();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Entrance"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').show();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Academic"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').show();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Indian"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').show();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Biographies"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').show();
   $('#busieness').hide();
   $('#comics').hide();
}else if(myarr[1] == "Business"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').show();
   $('#comics').hide();
}else if(myarr[1] == "Comics"){
  $('#mobile').hide();
  $('#camera').hide(); 
  $('#laptop').hide();
  $('#tv').hide();
  $('#desktop').hide();
  $('#Footwear').hide(); 
  $('#top-wear').hide();
  $('#bottom-wear').hide(); 
  $('#inner-wear').hide();
  $('#western-wear').hide();
  $('#lingerie-wear').hide();
  $('#sport-wear').hide();
   $('#ethnic-wear').hide();
   $('#winter-wear').hide();
   $('#entrance-exams').hide();
   $('#academic').hide();
   $('#indian-writing').hide();
   $('#biographies').hide();
   $('#busieness').hide();
   $('#comics').show();
}
    
    $.ajax({
      url:'../item/getbrand?id=' + myarr[0],
      type:'get',
      dataType:'json',
      contentType: false,  
      processData: false,
      success: function(response){
       $("#brand").attr('disabled', false);
       var $select = $('#brand');
       //$select.find('option').remove();
       $.each(response, function(key, value)
       {
           $select.append('<option value='+ value.brand_id + '>' + value.brand_name + '</option>');
       });
      }
    })
  }
</script>
@endsection




