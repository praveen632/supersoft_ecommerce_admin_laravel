<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Packages;
use App\usermanagement;


class PackagesController extends Controller
{
	public function specialPackage(Request $request){
		$req1 = new Packages();
		$req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();

		$data1 = $req1->get_specialProduct();
		return view('packages.specialPackage', compact('data', 'data_s_c', 'data_br', 'data1'));
	}

	public function product_list(Request $request){
		 $id = $_GET['id'];
		 $req1 = new Packages();
		$req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
		$data1 = $req1->get_product($id);
		
		return view('packages.product_list', compact('data', 'data_s_c', 'data_br', 'data1'));
	}

	public function sub_product_list(Request $request){
		$id = $_GET['id'];
		 $req1 = new Packages();
		$req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
		$data1 = $req1->get_sub_product($id);
		return view('packages.sub_product_list', compact('data', 'data_s_c', 'data_br', 'data1'));
	}

}
