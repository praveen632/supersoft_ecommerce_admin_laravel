<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class item extends model
{
  public function get_category(){
  	$data = DB::table('item')
    ->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id' )
    ->join('product_category', 'item.prd_cat_id', '=', 'product_category.id' )
    ->join('brand', 'item.brand_id', '=', 'brand.brand_id')
    ->where('item.status', '=', '1')
    ->get();
    return $data;
  }

  public function get_prod_cat(){
    $data = DB::table('product_category')->where('status', '=', '1')->get();
    return $data;
  }

  public function data_sub_ct($id){
    $data = DB::table('sub_category')->where('product_cat_id', '=', $id)->get();
    return $data;
  }


  public function get_brand($id){
    $data = DB::table('brand')->where('sub_cat_id', '=', $id)->get();
    return $data;
  }

  public function savess($data){
  	 $data = DB::table('item')->insert($data);
     $last_id = DB::getPdo()->lastInsertId();       
  	 return $last_id;
  }

  public function updates_image($data){
    $id = $data['lst_id'];
    $upd_d['image'] = $data['image'];
    $data = DB::table('item')->where('item_id', '=', $id)->update($upd_d);
    return $data;
  }


public function save_image($req){
 $data1 = $arrayName = array(
      'image' => $req['image'],
      'item_id' => $req['lst_id'],  
      );
    return $result = DB::table('item_image')->insert($data1);  
}


  public function edit($id){
  	$data = DB::table('item')->where('item_id', '=', $id)->first();
  	return $data;
  }

  public function get_image($id){
    $data = DB::table('item_image')->where('item_id', '=', $id)->get();
    return $data;
  }

  public function updates($data, $id){
    $data = DB::table('item')->where('item_id', '=', $id)->update($data);
    return $data;
  }


public function delete_image($id){
   DB::table('item_image')->where('item_id', '=', $id)->delete();
}

  public function update_image($req, $id){    
    $data1 = $arrayName = array(
      'image' => $req['image'],
      'item_id' => $req['lst_id'],  
      );
    return $result = DB::table('item_image')->insert($data1);
  }

  public function deletes($id){
           DB::table('item')->where('item_id', '=', $id)->delete();
   $data = DB::table('item_image')->where('item_id', '=', $id)->delete();
    return $data;
  }

  public function view($id){
    $data = DB::table('item')
    ->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id' )
    ->join('product_category', 'item.prd_cat_id', '=', 'product_category.id' )
    ->join('brand', 'item.brand_id', '=', 'brand.brand_id')
    ->join('item_image', 'item_image.item_id', '=', 'item.item_id')
    ->where('item.item_id', '=', $id)
    ->first();
    return $data;
  }

  public function get_location($id){
        return $data = DB::table('item_location')->where('item_id', '=', $id)->first();
    }
}
?>