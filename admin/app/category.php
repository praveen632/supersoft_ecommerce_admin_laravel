<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Category extends model
{
  public function get_category(){
  	$data = DB::table('product_category')->where('status', '=', '1')->get();
  	return $data;
  }

  public function savess($data){
  	 $data = DB::table('product_category')->insert($data);
  	 return $data;
  }

  public function edit($id){
  	$data = DB::table('product_category')->where('id', '=', $id)->first();
  	return $data;
  }

  public function updates($data, $id){
    $data = DB::table('product_category')->where('id', '=', $id)->update($data);
    return $data;
  }

  public function deletes($id){
    $data = DB::table('product_category')->where('id', '=', $id)->delete();
    return $data;
  }
}
?>