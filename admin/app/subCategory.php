<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class subCategory extends model
{
  public function get_category(){
  	$data = DB::table('sub_category')
    ->join('product_category', 'sub_category.product_cat_id', '=', 'product_category.id' )
    ->where('sub_category.status', '=', '1')
    ->get();
    return $data;
  }

  public function get_prod_cat(){
    $data = DB::table('product_category')->where('status', '=', '1')->get();
    return $data;
  }

  public function savess($data){
  	 $data = DB::table('sub_category')->insert($data);
  	 return $data;
  }

  public function edit($id){
  	$data = DB::table('sub_category')->where('sub_cat_id', '=', $id)->first();
  	return $data;
  }

  public function updates($data, $id){
    $data = DB::table('sub_category')->where('sub_cat_id', '=', $id)->update($data);
    return $data;
  }

  public function deletes($id){
    $data = DB::table('sub_category')->where('sub_cat_id', '=', $id)->delete();
    return $data;
  }
}
?>