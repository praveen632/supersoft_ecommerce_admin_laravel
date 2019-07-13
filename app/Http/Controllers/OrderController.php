<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\item;
use App\usermanagement;
use App\Order;

class OrderController extends Controller
{
  public function checkout(Request $request){
     $id = $request->input('user_id');
     $req = new Order();
     $cart_data = $req->get_cartss($id);
     $user_data = $req->get_user($id);
     $add_data = $req->get_add($id);
     return view('order.checkout', compact('cart_data', 'user_data', 'add_data'));
  }

  public function add_checkout(Request $request){  	
  	  $add_id = $request->input('address');  	
  	  $user_id = $request->input('user_id');
  	  $payment_type = $request->input('payment_type');
  	  
  	  $req = new Order();
      $cart_data = $req->get_cartss($user_id);
      //var_dump($cart_data);
      $item = array(); 
      $mrps = '';   
    foreach ($cart_data as $rows) {
    	$item[] = $rows->item_id;
    	$mrps += $rows->discount;
    }
    //var_dump($item);
    $item_ids = implode(',', $item);   
    $trn = $a = mt_rand('100000','999999');
    $data = array(
    	'user_id' => $user_id,
    	'item_id' => $item_ids, 
    	'add_id' => $add_id,    	
    	'amount' => $mrps,
    	'transaction_id' => $trn,
    	'payment_type' => $payment_type,
    	'date' => date("Y-m-d h:i:sa"),
    	'status' => '0'
    	);
    //var_dump($data);
    $res = $req->payment_insert($data); 
    if($res == true && $payment_type == 'payu'){
       Session::put('payment_id', $res);
       echo 'payu';
    }else if($payment_type == 'caseondel'){
       echo 'caseondel';
    }else{
    	echo '0';
    }
    //   return view('order.payment', compact('cart_data', 'user_data', 'addr_data'));
  }



  public function form_pay(Request $request){
    $value = $request->session()->get('payment_id');
     $req = new Order();
     $data = $req->get_transaction($value);
    return view('order.form', compact('data'));
  }

  public function create_hash(){
   // echo "11";die;
    $data = json_decode(file_get_contents('php://input'));
  //print_r($data->user_id);die;
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $data->txnid = $txnid;
    unset($data->hash);
    $SALT = 'djUHlBlUKA';//'e5iIg1jwi8';
      $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    
       $hashVarsSeq = explode('|', $hashSequence);
       $hash_string = ''; 
    foreach($hashVarsSeq as $hash_var) {
    $hash_string .= isset($data->$hash_var) ? $data->$hash_var : '';
    $hash_string .= '|';
    }
      $hash_string .= $SALT;
      $hash = strtolower(hash('sha512', $hash_string));
     $arrayName = array(
      'user_id' => $data->user_id,
      'item_id' => $data->item_id,
      'amount' => $data->amount, 
      'key' => $data->key,
      'hash' => $hash,
      'txnid' => $data->txnid,
      'firstname' => $data->firstname,
      'phone' => $data->phone,
      'surl' => $data->surl,
      'furl' => $data->furl,
      'service_provider' => $data->service_provider,
      'status' => '0',
      'date' => date('Y-m-d h:i:s')
      );
     $req = new Order();
     $data11 = $req->set_transaction($arrayName);
    $resp = array('hash' => $hash,'txnid'=>$txnid,'hash_string'=>$hash_string);
    return $resp;
  }

  // public function payment_success(Request $request){
  //   var_dump($_POST);
  // }

  public function payment_success(Request $request){
    
 $status=$_POST["status"];
 $firstname=$_POST["firstname"];
 $amount=$_POST["amount"];
 $txnid=$_POST["txnid"];
 $posted_hash=$_POST["hash"];
 $key=$_POST["key"];
 $productinfo=$_POST["productinfo"];
 $email=$_POST["email"];
 $salt="djUHlBlUKA";

// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
     $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
         $data['message'] = "Invalid Transaction. Please try again";
       } else {
          $data['message'] = "Thank You. Your order status is ". $status .".";
          $data['message1'] = "Your Transaction ID for this transaction is ".$txnid.".";
          $data['message2'] = "We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.";
       }
       return view('order.success', compact('data'));

  }

  public function payment_failure(Request $request){
    
        $status=$_POST["status"];
        $firstname=$_POST["firstname"];
        $amount=$_POST["amount"];
        $txnid=$_POST["txnid"];

        $posted_hash=$_POST["hash"];
        $key=$_POST["key"];
        $productinfo=$_POST["productinfo"];
        $email=$_POST["email"];
        $salt="";

        // Salt should be same Post Request 

        If (isset($_POST["additionalCharges"])) {
               $additionalCharges=$_POST["additionalCharges"];
                $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
          } else {
                $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
                 }
             $hash = hash("sha512", $retHashSeq);
          
               if ($hash != $posted_hash) {
                 $data['message'] = "Invalid Transaction. Please try again";
               } else {
                 $data['message'] = "Your order status is ". $status .".";
                 $data['message1'] = "Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.";
             }
          }
          return view('order.failure', compact('data'));  
}