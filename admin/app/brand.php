<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class brand extends model
{
  public function get_category(){
  	$data = DB::table('brand')
    ->join('sub_category', 'brand.sub_cat_id', '=', 'sub_category.sub_cat_id' )
    ->join('product_category', 'brand.prd_cat_id', '=', 'product_category.id' )
    ->where('brand.status', '=', '1')
    ->get();
    return $data;
  }

  public function get_prod_cat(){
    $data = DB::table('product_category')->where('status', '=', '1')->get();
    return $data;
  }

  public function get_sub_cat($id){
    $data = DB::table('sub_category')->where('product_cat_id', '=', $id)->get();
    return $data;
  }

  public function savess($data){
  	 $data = DB::table('brand')->insert($data);
  	 return $data;
  }

  public function edit($id){
  	$data = DB::table('brand')->where('brand_id', '=', $id)->first();
  	return $data;
  }

  public function updates($data, $id){
    $data = DB::table('brand')->where('brand_id', '=', $id)->update($data);
    return $data;
  }

  public function deletes($id){
    $data = DB::table('brand')->where('brand_id', '=', $id)->delete();
    return $data;
  }
}
?>