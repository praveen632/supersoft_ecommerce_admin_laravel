<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\subCategory;

class SubCategoryController extends Controller
{
	public function index(Request $request){
        $req = $request->all();
		$object_cont = new SubCategory();
		$data = $object_cont->get_category($req);
		return view('sub_category.index', compact('data'));
	}

	public function add(Request $request){
		$req = $request->all();
		$object_cont = new SubCategory();
		$data = $object_cont->get_prod_cat($req);
		return view('sub_category.add', compact('data'));
	}

	public function save(Request $request){
		$validator = $this->validate($request, [
      		'name' => 'required',
      		'prodt_cat' => 'required',    
      ]);
	    $req = new SubCategory();
	    $data = array(
	    	'sub_cat_name' => ucfirst($request->name),
	    	'product_cat_id' => $request->prodt_cat,
	        'status' => '1',   
	     );
	    $insert = $req->savess($data);
	   	if($insert == true){
	      Session::flash('message', 'Record is inserted!');
		}else{
	      Session::flash('message', 'Database Error!');
		}	
		return redirect('sub_category');	
	}

	public function edit(Request $request){
		$req = $request->all();
		$id = $_GET['id'];		
		$object_cont = new SubCategory();
        $data = $object_cont->edit($id);
        $data1 = $object_cont->get_prod_cat($req);
        return view('sub_category.edit', compact('data', 'data1'));
	}

	public function update(Request $request){
		$id = $request->input('id');
		$data = $arrayName = array(
			'sub_cat_name' =>ucfirst($request->input('name')),
			'product_cat_id' =>$request->input('prodt_cat'),  
			);
		$req = new SubCategory();
		$response = $req->updates($data, $id);
		if($response == '1'){
            Session::flash('message', 'Record is Updated!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('sub_category');
	}

	public function delete(Request $request){
		$id = $_GET['id'];
		$object_cont = new SubCategory();
        $response = $object_cont->deletes($id);
        if($response == '1'){
            Session::flash('message', 'Record is Deleted!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('sub_category');
	}
}
