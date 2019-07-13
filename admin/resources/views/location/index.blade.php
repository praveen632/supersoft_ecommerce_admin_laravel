@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="col-sm-8">
        <form action="{{ url('/location/search') }}" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="text" class="form-control" name="searchTerm" placeholder="Search for..." value="{{ isset($searchTerm) ? $searchTerm : '' }}">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
</div>


<div class="box-body no-padding">
    <table class="table table-striped">
      <?php if(count($data) > 0){?>
       <thead>        
              <tr>
                <th>S.NO</th>
                <th>Product Category</th>
                <th>Sub Category</th>
                <th>Package</th>
                <th>Brand</th>
                <th>Item</th>
                <th>Add Location</th>
                <th>View Details</th>
              </tr>
       </thead>
      <tbody>
        <?php  
              $i = 1; 
              foreach($data as $row)
              {
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row->pdt_cat_name ?></td>
                  <td><?php echo $row->sub_cat_name ?></td>
                  <td><?php echo $row->package ?></td>
                  <td><?php echo $row->brand_name ?></td>
                  <td><?php echo $row->name?></td>
                  <td>                   
                    <span class="col-md-1">               
                     <a href="<?php echo url('/location/add/?id='.$row->item_id) ?>">Add Locations</a>
                    </span>
                </td>
                <td>
                    <span class="col-md-1">               
                     <a href="<?php echo url('/item/view/?id='.$row->item_id) ?>"></i>View</a>
                    </span>
                </td>
                </tr>
                <?php $i++;} ?>
                <?php }else{ ?>
                <tr><td style="background-color: #ddd; text-align: center; font-weight: bold;">Record Not Found</td></tr>
                <?php } ?>
        </tbody>
    </table>
  </div>
<!--  -->
@endsection