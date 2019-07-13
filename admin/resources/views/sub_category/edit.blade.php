@extends('layouts.dashboard')
@section('content')

<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Sub Category</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/sub_category')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
     <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/sub_category/update') }}" enctype="multipart/form-data">
         {!! csrf_field() !!} 
         <input type="hidden" class="form-control" name="id" value="<?php echo $data->sub_cat_id;?>">       
      <div class="box-body">
      <div class="form-group{{ $errors->has('prodt_sub_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
          <div class="col-sm-10">
            
              <select id="prodt_cat" class="form-control" name="prodt_cat">
                <?php foreach($data1 as $row) {   ?> 
                 <option <?php if($row->id == $data->product_cat_id){ ?> selected="selected" <?php }?> value="<?php echo $row->id ?>" ><?php echo $row->pdt_cat_name ?></option>
                 <?php } ?>          
              </select>
          
         </div>                       
      </div>


      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" name="name" value="<?php echo $data->sub_cat_name;?>">
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
        </div>                       
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
@endsection

