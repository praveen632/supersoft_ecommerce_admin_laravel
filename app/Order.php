<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Order extends Model{
	public function get_cartss($id){
		$data = DB::table('cart')->where('user_id', '=', $id)->get();
		return $data;
	}

	public function get_add($id){
		$data = DB::table('user_address')->where('user_id', '=', $id)->get();
		return $data;
	}

	public function get_user($id){
		$data = DB::table('user')->where('id', '=', $id)->first();
		return $data;
	}

	// public function get_address($id){
	// 	$data = DB::table('user_address')->where('add_id', '=', $id)->get();
	// 	return $data;
	// }

	public function payment_insert($data){
		$data = DB::table('payment')->insert($data);
		$last_id = DB::getPdo()->lastInsertId();
		return $last_id;
	}

	public function get_transaction($id){
		$data = DB::table('payment')
		->join('user', 'payment.user_id', '=', 'user.id')		
		->where('payment.pay_id', '=', $id)	
		->get();
		return $data;
	}

	public function set_transaction($data){
		$data = DB::table('final_payment')->insert($data);
		$last_id = DB::getPdo()->lastInsertId();
		$data = DB::table('final_payment')->where('finPay_id', '=', $last_id)->get();
		return $data;
	}

	// public function get_succs_trans($id){
	// 	$data = DB::table('final_payment')->where('finPay_id', '=', $id)->get();
	// 	return $data;

	// }

	public function update_succ($txnid){
		$data = DB::table('final_payment')->where('txnid', '=', $txnid)->first();
		if($data > '0'){
			return $data1 = DB::table('final_payment')->where('txnid', '=', $txnid)->update(['status' => 1]);
		}
	}
}