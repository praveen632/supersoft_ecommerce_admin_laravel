<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class item extends Model{
	public function getDetails($id){
		$data = DB::table('item')
		->join('brand', 'item.brand_id', '=', 'brand.brand_id')		
		->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
		->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
		->where([['item.item_id', '=', $id],['item.status', '=', '1'],])
		->get();
		return $data;
	}

	public function getImage($id){
		$data = DB::table('item_image')->where('item_id', '=', $id)->get();
		return $data;
	}

	public function check_delivery($id, $loc){
        // $data = DB::table('item_location')
        // ->where('item_id', '=', $id)
        // ->orWhere('location', '=', $loc)
        // ->get();

        $data = DB::table('item_location')->where([
				    ['item_id', '=', $id],
				    ['location', '=', $loc],
				])->first();
        //var_dump($data);die;
		return $data;
	}

	public function get_useraddr($id){
       $data = DB::table('user')->where('phone', '=', $id)->first();
		return $data;
	}

	public function get_addr($id){
		$data = DB::table('user_address')->where('user_id', '=', $id)->get();
		return $data;
	}

	public function add_save($data){
		$data = DB::table('user_address')->insert($data);
		return $data;
	}

	public function delete_address($id){
		$data = DB::table('user_address')->where('add_id', '=', $id)->delete();
		return $data;
	}

	public function edit_address($id){
		$data = DB::table('user_address')->where('add_id', '=', $id)->first();
		return $data;
	}

	public function update_save($data, $id){
         $data = DB::table('user_address')->where('add_id', '=', $id)->update($data);
		return $data;
	}

	public function add_cart($data){
		$data = DB::table('cart')->insert($data);
		return $data;
	}

	public function cart_list($id){
		$data = DB::table('cart')->where('user_id', '=', $id)->get();
		return $data;
	}

	public function remove_cart($id){
		return $data = DB::table('cart')->where('cart_id', '=', $id)->delete();
	}
}