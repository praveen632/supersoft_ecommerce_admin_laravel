<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\brand;

class BrandController extends Controller
{
	public function index(Request $request){
        $req = $request->all();
		$object_cont = new brand();
		$data = $object_cont->get_category($req);
		return view('brand.index', compact('data'));
	}

	public function add(Request $request){
		$req = $request->all();
		$object_cont = new brand();
		$data_p_c = $object_cont->get_prod_cat($req);
		//$data_s_c = $object_cont->get_sub_cat($req);
		return view('brand.add', compact('data_p_c'));
	}

	public function getSubCat(Request $request){
		$id = $_GET['id'];		
		$object_cont = new brand();
		$data_s_c = $object_cont->get_sub_cat($id);
        return $valu = json_encode($data_s_c);
	}

	public function save(Request $request){
		$validator = $this->validate($request, [
      		'name' => 'required',
      		'prodt_cat' => 'required',
      		'prodt_sub_cat' => 'required',    
      ]);
	    $req = new brand();
	    $data = array(
	    	'brand_name' => $request->name,
	    	'prd_cat_id' => $request->prodt_cat,
	    	'sub_cat_id' => $request->prodt_sub_cat,
	        'status' => '1',   
	     );	    
	    $insert = $req->savess($data);
	   	if($insert == true){
	      Session::flash('message', 'Record is inserted!');
		}else{
	      Session::flash('message', 'Database Error!');
		}	
		return redirect('brand');	
	}

	public function edit(Request $request){
		$req = $request->all();
		$id = $_GET['id'];		
		$object_cont = new brand();
        $data = $object_cont->edit($id);
        $data1 = $object_cont->get_prod_cat($req);
        return view('brand.edit', compact('data', 'data1'));
	}

	public function update(Request $request){
		$id = $request->input('id');
		$data = $arrayName = array(
			'brand_name' => $request->name,
	    	'prd_cat_id' => $request->prodt_cat,
	    	'sub_cat_id' => $request->prodt_sub_cat,	           
		   );		
		$req = new brand();
		$response = $req->updates($data, $id);
		if($response == '1'){
            Session::flash('message', 'Record is Updated!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('brand');
	}

	public function delete(Request $request){
		$id = $_GET['id'];
		$object_cont = new brand();
        $response = $object_cont->deletes($id);
        if($response == '1'){
            Session::flash('message', 'Record is Deleted!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('brand');
	}
}
