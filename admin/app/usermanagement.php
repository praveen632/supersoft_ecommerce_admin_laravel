<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class usermanagement extends Model{
      public function changepassword($data){      	
      	$select = DB::table('user')->where('email', Session::get('useremail'))->first();
      	var_dump($select);
      	if ($select->password == md5($data->Password)) {
      		$update =  DB::table('user')->where('email', Session::get('useremail'))->update(array('password' => md5($data->New_password)));
      		if($update){
				return 1;
			}else{
				return 0;
			} 
      	}else{
      		return "error";
      	}
      }

      public function getuser(){
      	$data = DB::table('user')->where('status', '=', '0')->get();
      	return $data;
      }

	}