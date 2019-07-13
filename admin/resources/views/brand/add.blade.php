@extends('layouts.dashboard')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Add Brand</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/brand')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/brand/save') }}" enctype="multipart/form-data">
         {!! csrf_field() !!}        
      <div class="box-body">

         <div class="form-group{{ $errors->has('prodt_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
          <div class="col-sm-10">
            
              <select id="prodt_cat" class="form-control" name="prodt_cat" onchange="getsubcat(this.value)" >
                <option value="">Select</option>
                <?php foreach($data_p_c as $row) {         
                 ?> 
                 <option value="<?php echo $row->id ?>"><?php echo $row->pdt_cat_name ?></option>
                 <?php } ?>          
              </select>
          
         </div>                       
      </div>

      <div class="form-group{{ $errors->has('prodt_sub_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Sub Category</label>
          <div class="col-sm-10">             
              <select class="form-control" id="prodt_sub_cat" name ="prodt_sub_cat" >
              <option value="">Select</option>
              </select>
          
         </div>                       
      </div>


        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" name="name" value="{{ old('name') }}">
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
    </div>
      <!-- /.box-footer -->
    </form>
  </div> 
   
<script type="text/javascript">
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
                $select.find('option').remove();
                $.each(response,function(key, value)
                {
                    $select.append('<option value=' + value.sub_cat_id + '>' + value.sub_cat_name + '</option>'); // return empty
                });
        }
    });
  }
</script>
@endsection




