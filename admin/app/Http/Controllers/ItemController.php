<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\item;

class ItemController extends Controller
{
	public function index(Request $request){
        $req = $request->all();
		$object_cont = new item();
		$data = $object_cont->get_category($req);
		return view('item.index', compact('data'));
	}

	public function add(Request $request){
		$req = $request->all();
		$object_cont = new item();
		$data_p_c = $object_cont->get_prod_cat($req);		
		return view('item.add', compact('data_p_c'));
	}

	public function getbrand(Request $request){
		$id = $_GET['id'];		
		$object_cont = new item();
		$data_s_c = $object_cont->get_brand($id);
		return $valu = json_encode($data_s_c);
	}

	// public function getSubCat(Request $request){
	// 	$id = $_GET['id'];		
	// 	$object_cont = new brand();
	// 	$data_s_c = $object_cont->get_sub_cat($id);
 //        return $valu = json_encode($data_s_c);
	// }

	public function save(Request $request){
		$validator = $this->validate($request, [
      		'brand' => 'required',
      		'prodt_cat' => 'required',
      		'prodt_sub_cat' => 'required',
      		'name' => 'required',    
      ]);
	    $req = new item();
	    $sub_id = $request->prodt_sub_cat;
	    $s_id = explode(',', $sub_id);
	    $sub_cat = $s_id['0'];

	    $discount_price = $request->mrp - ($request->mrp * ($request->discount / 100));

	    $data1 = array(	    	
	    	'brand_id' => $request->brand,
	    	'prd_cat_id' => $request->prodt_cat,
	    	'sub_cat_id' => $sub_cat,
	    	'package' => $request->package,
	    	'name' => $request->name,
	    	'mrp' => $request->mrp,
	    	'discount' => $request->discount,
	    	'mrp_aft_dis' => $discount_price,
	    	'BV' => $request->bv,
	    	'code' => $request->code,
	    	'highlight' => $request->highlight,
	    	'services' => $request->services,
	    	'specification' => $request->specification,	    	
	    	'mob_ram' => $request->mob_ram,	    	    	
	    	'mob_colore' => $request->mob_colore,	    	
	    	'mob_option' => $request->mob_option,	    	
	    	'mob_prd_description' => $request->mob_prd_description,	    	
	    	'laptop_operating_system' => $request->laptop_operating_system,	    	
	    	'laptop_old_price' => $request->laptop_old_price,	    		    	
	    	'desktop_hurry' => $request->desktop_hurry,	    	
	    	'shoes_color' => $request->shoes_color,
	    	'shoes_size' => $request->shoes_size,
	    	'top_wear_size' => $request->top_wear_size,
	    	'book_auther' => $request->book_auther,
	    	'book_more_details' => $request->book_more_details,	    	
	    	'book_discription' => $request->book_discription,	    	
	        'status' => '1',   
	     );	

            $insert_id = $req->savess($data1);
            
	        $insert = array();
		    $num_files = count($_FILES['image']['name']);
		    		    
		    for($i=0; $i < count($_FILES['image']['tmp_name']);$i++)
		    {		        
			    $saveData = array();
			    $target = base_path().'/public/images/';
			    $data = $_FILES['image']['name'][$i];			    
			    $s = explode('.', $data);
			    	    
			    $data_i = $s[0].rand().'.'.$s[1];
			    //$target = $target .rand(). basename($_FILES['upload']['name'][$i]);
			    $target = $target . basename($data_i);
			    //var_dump($target);die;
			    $uploadOk = 1;
			    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			    //$Filename= basename($_FILES['image']['name']);
			    
			    move_uploaded_file($_FILES['image']['tmp_name'][$i], $target);
			    $saveData['image'] = $data_i;
			    $saveData['lst_id'] = $insert_id;      
	        
			    $insert = $req->save_image($saveData);
			}
			    $req = $req->updates_image($saveData);
			
			   	if($insert == 1){
			      Session::flash('message', 'Record is inserted!');
				}else{
			      Session::flash('message', 'Database Error!');
				}	
				return redirect('item');
					
	}

	public function edit(Request $request){
		$req = $request->all();
		$id = $_GET['id'];		
		$object_cont = new item();
        $data = $object_cont->edit($id);
        $data_p_c = $object_cont->get_prod_cat($req);
        $data_sub_ct = $object_cont->data_sub_ct($data->prd_cat_id);        
        $data_brand = $object_cont->get_brand($data->sub_cat_id);        
        $img_data = $object_cont->get_image($id);               
        return view('item.edit', compact('data', 'data_p_c', 'data_sub_ct', 'data_brand', 'img_data'));
	}

	public function update(Request $request){
		$id = $request->input('id');
		$prodt_cat = $request->input('prodt_cat');
		$discount_price = $request->mrp - ($request->mrp * ($request->discount / 100)); 
		//var_dump($prodt_cat);die;
		 $data = array(	    	
	    	'brand_id' => $request->brand,
	    	'prd_cat_id' => $request->prodt_cat,
	    	'sub_cat_id' => $request->prodt_sub_cat,	    	
	    	'package' => $request->package,
	    	'name' => $request->name,
	    	'mrp' => $request->mrp,
	    	'discount' => $request->discount,
	    	'mrp_aft_dis' => $discount_price,
	    	'BV' => $request->bv,
	    	'code' => $request->code,
	    	'highlight' => $request->highlight,
	    	'services' => $request->services,
	    	'specification' => $request->specification,	    	
	    	'mob_ram' => $request->mob_ram,	    	    	
	    	'mob_colore' => $request->mob_colore,	    	
	    	'mob_option' => $request->mob_option,	    	
	    	'mob_prd_description' => $request->mob_prd_description,	    	
	    	'laptop_operating_system' => $request->laptop_operating_system,	    	
	    	'laptop_old_price' => $request->laptop_old_price,	    		    	
	    	'desktop_hurry' => $request->desktop_hurry,	    	
	    	'shoes_color' => $request->shoes_color,
	    	'shoes_size' => $request->shoes_size,
	    	'top_wear_size' => $request->top_wear_size,
	    	'book_auther' => $request->book_auther,
	    	'book_more_details' => $request->book_more_details,	    	
	    	'book_discription' => $request->book_discription,	    	
	        'status' => '1',   
	     );
	     	  		
		$req = new item();
		$response = $req->updates($data, $id);
		$response = $req->delete_image($id);
		 $insert = array();
		    $num_files = count($_FILES['image']['name']);
		    		    
		    for($i=0; $i < count($_FILES['image']['tmp_name']);$i++)
		    {		        
			    $saveData = array();
			    $target = base_path().'/public/images/';
			    $data = $_FILES['image']['name'][$i];			    
			    $s = explode('.', $data);
			    	    
			    $data_i = $s[0].rand().'.'.$s[1];
			    //$target = $target .rand(). basename($_FILES['upload']['name'][$i]);
			    $target = $target . basename($data_i);
			    //var_dump($target);die;
			    $uploadOk = 1;
			    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			    //$Filename= basename($_FILES['image']['name']);
			    
			    move_uploaded_file($_FILES['image']['tmp_name'][$i], $target);
			    $saveData['image'] = $data_i;
			    $saveData['lst_id'] = $id;
      
	        
			    $insert = $req->update_image($saveData, $id);
			}
		if($insert == '1'){
            Session::flash('message', 'Record is Updated!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('item');
	}

	public function delete(Request $request){
		$id = $_GET['id'];
		$object_cont = new item();
        $response = $object_cont->deletes($id);
        if($response == '1'){
            Session::flash('message', 'Record is Deleted!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('item');
	}

	public function view(Request $request){
		$id = $_GET['id'];
		$object_cont = new item();
        $data = $object_cont->view($id);
        $image_data = $object_cont->get_image($id);
        $location_data = $object_cont->get_location($id);
                
        return view('item.view', compact('data', 'image_data', 'location_data'));
	}
}
