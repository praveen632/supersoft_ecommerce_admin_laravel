<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\location;

class LocationController extends Controller
{
	public function index(Request $request){ 
	$searchTerm = $request->input('searchTerm');
         $posts = new location();
         $data = $posts->search($searchTerm);       
		return view('location.index', compact('data'));
	}

	public function search(Request $request){
		 $searchTerm = $request->input('searchTerm');
         $posts = new location();
         $data = $posts->search($searchTerm);
                 
		 return view('location.index', compact('data'));
	}

	public function addlocation(Request $request){
		$id = $_GET['id'];
		$req = new location();
		$data = $req->getdata($id);			
		return view('location.add', compact('data'));
	}

	public function save(Request $request){
		$req = new location();
		$id = $request->input('id');
		$data = $request->input('location');
			
		for($i=0; $i < count($data);$i++)
	    {
          $datas = $data[$i];
          $saveData['location'] = $datas;
		  $saveData['item_id'] = $id;
          $insert = $req->saveDatas($saveData);
	    } 
    	if($insert == 1){
		      Session::flash('message', 'Record is inserted!');
			}else{
		      Session::flash('message', 'Database Error!');
			}	
			return redirect('/location/search');     
	   	}

}