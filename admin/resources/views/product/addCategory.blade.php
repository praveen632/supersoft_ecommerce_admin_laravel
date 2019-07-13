@extends('layouts.dashboard')
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Add Product Category</h3>&nbsp;&nbsp;<a class="btn btn-success search_btn-add" href="<?php echo url('/category')?>">View List</a>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" name="classimg_create" id="classimg_create" role="form" method="POST" action="{{ url('/category/save') }}" enctype="multipart/form-data">
         {!! csrf_field() !!}        
      <div class="box-body">
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
@endsection
