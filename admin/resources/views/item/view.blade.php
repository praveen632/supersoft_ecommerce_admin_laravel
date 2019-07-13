@extends('layouts.dashboard')
@section('content')

<body>
<div class="container">
    <div class="row">
        <div class="box-header">
            <h1 class="box-title">
                All Details
            </h1>
            <a class="btn btn-success search_btn-add" href="<?php echo url('/item')?>">Item List</a>
            
        </div>
        <div id="no-more-tables">
            <table class="col-md-9 table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th>Name</th>                
                <td data-title="Company"><?php echo $data->name; ?></td>                
              </tr>
            </thead>
            <tbody>              
            <tr>
             <th>Cotegery</th>              
                <td data-title="Company"><?php echo $data->pdt_cat_name ?></td>                
              </tr>
              <tr>
              <th>Sub Category</th>                
                <td data-title="Company"><?php echo $data->sub_cat_name ?></td>                
              </tr>

              <tr>
               <th>Brand Name</th>                
                <td data-title="Company"><?php echo $data->brand_name ?></td>                
              </tr>

               <tr>
               <th>Package</th>                
                <td data-title="Company"><?php echo $data->package ?></td>                
              </tr>

              <tr>
               <th>Location</th>
               <?php if($location_data == ''){ ?>
              <?php }else{  ?>               
               <td data-title="Company"><?php echo $location_data->location; ?></td> 
              <?php } ?>
              </tr>

              <tr>
               <th>Image</th>
               <?php foreach ($image_data as $rows) { ?>  
                
                <td><img src="<?php echo '../../public/images/' . $rows->image; ?>" height="100" width="100"/></td>

                <?php } ?>               
              </tr>

              <?php if($data->sub_cat_name == 'Camera'){ ?>
                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

              <?php }else if($data->sub_cat_name == 'Mobile'){ ?>
                 
                 <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                 <tr>
                 <th>RAM</th>                
                  <td data-title="Company"><?php echo $data->mob_ram ?></td>                
                </tr>

                <tr>
                 <th>Colore</th>                
                  <td data-title="Company"><?php echo $data->mob_colore ?></td>                
                </tr>                

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>

                <tr>
                 <th>Option</th>                
                  <td data-title="Company"><?php echo $data->mob_option ?></td>                
                </tr>

                

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->mob_prd_description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


              <?php  }else if($data->sub_cat_name == 'Laptop'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->laptop_operating_system ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>

                 <tr>
                 <th>Old Price</th>                
                  <td data-title="Company"><?php echo $data->laptop_old_price ?></td>                
                </tr>                             

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->laptop_p_description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


             <?php  }else if($data->sub_cat_name == 'Desktop'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>                                            

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>
              <?php  }else if($data->sub_cat_name == 'Tv'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>                                            

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


               <?php  }else if($data->sub_cat_name == 'Footwear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 

                <tr>
                 <th>Color</th>                
                  <td data-title="Company"><?php echo $data->shoes_color ?></td>                
                </tr>

                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->shoes_size ?></td>                
                </tr>                                           

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


               <?php  }else if($data->sub_cat_name == 'Top Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


             <?php  }else if($data->sub_cat_name == 'Bottom Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>
                 
             <?php  }else if($data->sub_cat_name == 'Inner Wear & Sleep Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


              <?php  }else if($data->sub_cat_name == 'Western Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


              <?php  }else if($data->sub_cat_name == 'Lingerie, Sleep & Swimwear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

               <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

              <?php  }else if($data->sub_cat_name == 'Sports Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           
 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

               <?php  }else if($data->sub_cat_name == 'Ethnic Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                
              <?php  }else if($data->sub_cat_name == 'Winter & Seasonal Wear'){ ?>
                 
                 <tr>
                 <th>Operating System</th>                
                  <td data-title="Company"><?php echo $data->desktop_hurry ?></td>                
                </tr> 

                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr> 


                <tr>
                 <th>Size</th>                
                  <td data-title="Company"><?php echo $data->top_wear_size ?></td>                
                </tr>                                           

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Product Description</th>                
                  <td data-title="Company"><?php echo $data->description ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>


          <?php  }else if($data->sub_cat_name == 'Entrance exams'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>


          <?php  }else if($data->sub_cat_name == 'Academic'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>

              <?php  }else if($data->sub_cat_name == 'Indian writing'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>
            
              <?php  }else if($data->sub_cat_name == 'Biographies'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>

          <?php  }else if($data->sub_cat_name == 'Business'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>

                
              <?php  }else if($data->sub_cat_name == 'Comics'){ ?>
                 
                <tr>
                 <th>Product BV</th>                
                  <td data-title="Company"><?php echo $data->BV ?></td>                
                </tr>

                <tr>
                 <th>Discount</th>                
                  <td data-title="Company"><?php echo $data->discount ?></td>                
                </tr>

                <tr>
                 <th>MRP</th>                
                  <td data-title="Company"><?php echo $data->mrp ?></td>                
                </tr>  

                <tr>
                 <th>Code</th>                
                  <td data-title="Company"><?php echo $data->code ?></td>                
                </tr>    

                 <tr>
                 <th>Highlight</th>                
                  <td data-title="Company"><?php echo $data->highlight ?></td>                
                </tr>               

                <tr>
                 <th>Services</th>                
                  <td data-title="Company"><?php echo $data->services ?></td>                
                </tr>

                <tr>
                 <th>Specification</th>                
                  <td data-title="Company"><?php echo $data->specification ?></td>                
                </tr>

                <tr>
                 <th>Auther</th>                
                  <td data-title="Company"><?php echo $data->book_auther ?></td>                
                </tr>

                <tr>
                 <th>Discription</th>                
                  <td data-title="Company"><?php echo $data->book_discription ?></td>                
                </tr>

                <tr>
                 <th>More Details</th>                
                  <td data-title="Company"><?php echo $data->book_more_details ?></td>                
                </tr>
              <?php  } ?>
              
              
            </tbody>
          </table>
        </div>
    </div>
   
</div>
</body>
@endsection
