<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Location extends model
{
   public static function search($searchTerm)
    {
    	$data = DB::table('item')
    ->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id' )
    ->join('product_category', 'item.prd_cat_id', '=', 'product_category.id' )
    ->join('brand', 'item.brand_id', '=', 'brand.brand_id')        
    ->where('item.item_id', 'like', '%' .$searchTerm. '%')
    ->orWhere('item.name', 'like', '%' .$searchTerm. '%')
    ->get();
        return $data;
    }

    public function getdata($id){
    	return $data = DB::table('item')->where('item_id', '=', $id)->get();
    }

    public function saveDatas($data){
       return $data = DB::table('item_location')->insert($data);
    }

    
}