@extends('layouts.dashboard')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Add Item</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/item')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/location/save') }}" enctype="multipart/form-data">
         {!! csrf_field() !!}        
      <div class="box-body">
         <input type="hidden" class="form-control" name="id" value="<?php echo $data['0']->item_id; ?>" >
         <div class="form-group{{ $errors->has('prodt_cat') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
            <div class="col-sm-6">
             <input type="text" class="form-control" name="name" value="<?php echo $data['0']->name; ?>" readonly>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                   
         </div>
         </div>  

         <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
          <label for="inputEmail3" class="col-sm-2 control-label">Add Locations</label>
           <div id="wrapper">
            <div class="col-sm-6" id="field_div">
             </div>
                   
         </div>
         <!--  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <i class="more-less glyphicon glyphicon-plus"></i>
          Add Location</a> -->
          <input type="button" value="Add Location" onclick="add_field();">
         </div>

          <!--  -->
          
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
    </div>
      <!-- /.box-footer -->
    </form>
  </div> 
   <script>
function add_field()
{
  var total_text=document.getElementsByClassName("input_text");
  total_text=total_text.length+1;
  document.getElementById("field_div").innerHTML=document.getElementById("field_div").innerHTML+
  "<p id='input_text"+total_text+"_wrapper'><input type='text' name='location[]' class='input_text' id='input_text"+total_text+"' placeholder='Enter Location'>&nbsp;<input type='button' value='Remove' onclick=remove_field('input_text"+total_text+"');></p>";
}
function remove_field(id)
{
  document.getElementById(id+"_wrapper").innerHTML="";
}
</script>

@endsection




