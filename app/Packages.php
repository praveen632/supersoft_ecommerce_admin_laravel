<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Packages extends Model{

	public function get_specialProduct(){
		$data = DB::table('item')
		->join('brand', 'item.brand_id', '=', 'brand.brand_id')		
		->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
		->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
		->where([['item.package', '=', 'P1'],['item.status', '=', '1'],])		
		->get();
		return $data;
	}

	public function get_product($id){
	  $data = DB::table('item')
		->join('brand', 'item.brand_id', '=', 'brand.brand_id')		
		->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
		->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
		->where([['product_category.id', '=', $id],['item.status', '=', '1'],])		
		->get();
		return $data;
	}

	public function get_sub_product($id){
		$data = DB::table('item')
		->join('brand', 'item.brand_id', '=', 'brand.brand_id')		
		->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
		->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
		->where([['sub_category.sub_cat_id', '=', $id],['item.status', '=', '1'],])		
		->get();
		return $data;
	}
}