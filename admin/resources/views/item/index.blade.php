@extends('layouts.dashboard')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Item</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/add/item')?>">Add Item</a>
  </div>
  {!! csrf_field() !!}
   <div class="col-md-12">
        @if(Session::has('message'))
          <div class="alert alert-success" style="text-align:center;">
            <a href="./item" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong> {{ Session::get('message') }}</strong>
          </div>
          @endif
    </div>
  <!-- /.box-header -->
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
                <th>Action</th>
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
                      <a href="<?php echo url('/item/edit/?id='.$row->item_id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    </span>
                    <span class="col-md-1">               
                     <a href="<?php echo url('/item/delete/?id='.$row->item_id) ?>"><i class="glyphicon glyphicon-trash"></i></a>
                    </span>
                    <span class="col-md-1">               
                     <a href="<?php echo url('/item/view/?id='.$row->item_id) ?>"></i>View</a>
                    </span>
                </tr>
                <?php $i++;} ?>
                <?php }else{ ?>
                <tr><td style="background-color: #ddd; text-align: center; font-weight: bold;">Record Not Found</td></tr>
                <?php } ?>
        </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>  
@endsection
