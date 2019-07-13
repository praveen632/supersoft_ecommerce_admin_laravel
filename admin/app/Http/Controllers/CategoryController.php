<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\category;

class CategoryController extends Controller
{
	public function index(Request $request){
        $req = $request->all();
		$object_cont = new Category();
		$data = $object_cont->get_category($req); 
        return view('product.category', compact('data'));
	}

	public function add(){
		return view('product.addCategory');
	}

	public function save(Request $request){
		$validator = $this->validate($request, [
      		'name' => 'required',    
      ]);
	    $req = new category();
	    $data = array(
	    	'pdt_cat_name' => $request->name,
	        'status' => '1',   
	     );
	    $insert = $req->savess($data);
		if($insert == true){
	      Session::flash('message', 'Record is inserted!');
		}else{
	      Session::flash('message', 'Database Error!');
		}	
		return redirect('category');	
	}

	public function edit(Request $request){
		$id = $_GET['id'];
		$object_cont = new Category();
        $data = $object_cont->edit($id);
        return view('product.editCategory', compact('data'));
	}

	public function update(Request $request){
		$id = $request->input('id');
		$data = $arrayName = array(
			'pdt_cat_name' =>$request->input('name'), 
			);
		$req = new Category();
		$response = $req->updates($data, $id);
		if($response == '1'){
            Session::flash('message', 'Record is Updated!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('category');
	}

	public function delete(Request $request){
		$id = $_GET['id'];
		$object_cont = new Category();
        $response = $object_cont->deletes($id);
        if($response == '1'){
            Session::flash('message', 'Record is Deleted!');
		}else{
            Session::flash('message', 'Database Error!');
		}
		return redirect('category');
	}
}
