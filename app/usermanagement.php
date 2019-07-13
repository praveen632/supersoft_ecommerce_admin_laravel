<?php
namespace App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class usermanagement extends Model{

   //   public function changepassword($data){      	
   //    	$select = DB::table('user')->where('email', Session::get('useremail'))->first();
   //    	var_dump($select);
   //    	if ($select->password == md5($data->Password)) {
   //    		$update =  DB::table('user')->where('email', Session::get('useremail'))->update(array('password' => md5($data->New_password)));
   //    		if($update){
			// 	return 1;
			// }else{
			// 	return 0;
			// } 
   //    	}else{
   //    		return "error";
   //    	}
   //    }


      public function signup($data){
        $email = $data['email'];
        $phone = $data['phone'];
        $res = DB::table('user')
        ->where('email', '=', $email)
        ->orWhere('phone', '=', $phone)
        ->first();        
        if(!empty($res)){
          return 0;
        }else{
          //var_dump($data);die;
              $mob = $data['phone'];

              $apiKey = 'f0493a4b2319cc118e397987cc4c3f3';
              $sender = 'DEMOOS';
              $res = rand(1000, 20000);              
              $message = rawurlencode($res.'is your ecommerce verification code. Please do not share this OTP with anyone to ensure acount security.');             
              // Prepare data for POST request
              $data1 = 'AUTH_KEY=' . $apiKey . '&mobileNos=' . $mob . "&senderId=" . $sender . "&message=" . $message . "&routeId=1&smsContentType=english" ;
              // Send the GET request with cURL
              $ch = curl_init('http://mysms.sms7.biz/rest/services/sendSMS/sendGroupSms/?' . $data1);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($ch);
              curl_close($ch);

              $data['otp'] = $res;

              $data = DB::table('user')->insert($data);
              $last_id = DB::getPdo()->lastInsertId();
              $da = DB::table('user')->where('id', '=', $last_id)->first(); 
             // var_dump($da);die;       
              return $da;
        }        
      }

      public function update_otp($otp, $mob){
        $res = DB::table('user')->where('phone', '=', $mob)->first();
        if($res->otp == $otp){
          //echo "hhh";
           DB::table('user')->where('phone', $mob)->update(['status' =>'1']);
          $data = DB::table('user')->where('phone', '=', $mob)->first();
            return $data;
        }else{
          //echo "mm";
            return false;
        }
      }

      public function loginCheck($user, $pass){
       $res = DB::table('user')
        ->where('email', '=', $user)
        ->orWhere('phone', '=', $user)        
        ->first();
        
       $count = count($res);
       if ($count == 0){
          return '0';
       }else{
        $password =  md5($pass);

        if($res->password == $password && $res->status == '1'){
          return $res;
        }else{
          return '1';
        } 
       }        
      }

      public function send_mail($data1){
         $data = DB::table('user')->where('email', '=', $data1)->first();
         if($data == NULL){
           return 0;
         }else{
          
            include('../mail/class.phpmailer.php');
          $mail = new \PHPMailer(true);  
            $mail->IsSMTP();    
            try {
           //var_dump($data->user_name);die;
             $mail->SMTPAuth   = true;
             $mail->SMTPSecure  = 'ssl';
             $link = "Dear ".$data->user_name." <a href='http://www.yfwdownloader.com/ecommerce/public/resetpassword?key=".$data1."'>click here</a> reset password"; 
             $mail->Host       = "smtp.gmail.com";           
             $mail->Port       = "465";   
             $mail->SMTPDebug = 1;                
             $mail->Username   = "praveensingh632@gmail.com";  
             $mail->Password   = "";
             $mail->SetFrom("praveensingh632@gmail.com", "Reset Password");
             $mail->AddAddress($data1, "Supersoft");
             $mail->Subject = "Reset Password" ;
             $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
             $mail->MsgHTML($link);
             $mail->Send();
             return true;
          } catch (phpmailerException $e) {
            //echo $e->errorMessage();
             return false;
          } catch (Exception $e) {
             return false;               
          }
         }
         
      }

      public function send_otp($mob){
         $data = DB::table('user')->where('phone', '=', $mob)->first();
           if($data == NULL){
             return 0;
           }else{
              $apiKey = 'f0493a4b2319cc118e397987cc4c3f3';
              $sender = 'DEMOOS';
              $res = rand(100000, 1000000);              
              $message = rawurlencode('This is your new login Password'.$res);             
              // Prepare data for POST request
              $data = 'AUTH_KEY=' . $apiKey . '&mobileNos=' . $mob . "&senderId=" . $sender . "&message=" . $message . "&routeId=1&smsContentType=english" ;
              // Send the GET request with cURL
              $ch = curl_init('http://mysms.sms7.biz/rest/services/sendSMS/sendGroupSms/?' . $data);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $response = curl_exec($ch);
              curl_close($ch);              
              // Process your response here

             $data = DB::table('user')
                ->where('phone', $mob)
                ->update(['password' => md5($res)]);
                return $data;
                       
          }

      }

      public function reset_upadte($email, $pass){
        DB::table('user')
            ->where('email', $email)
            ->update(['password' => $pass]);
      }

      public function getinfo($id){
        $data = DB::table('user')->where('phone', '=', $id)->first();
        return $data;
      }

      public function getuser(){
      	$data = DB::table('user')->where('status', '=', '0')->get();
      	return $data;
      }

      public function getproduct(){
            $data = DB::table('product_category')->where('status', '=', '1')->get();
            return $data;
      }

      public function get_sub_cat(){
        $data = DB::table('sub_category')->get();
            return $data;
      }

      public function get_brand(){
        $data = DB::table('brand')->get();
            return $data;
      }

      public function getsubcat($id){
            $data = DB::table('sub_category')->where('product_cat_id', '=', $id)->get();
            return $data;
      }

      
      public function getBrand($id){
            $data = DB::table('brand')->where('sub_cat_id', '=', $id)->get();
            return $data;
      }

      public function getItem($id){
          $data = DB::table('item')               
          ->where('brand_id', '=', $id)
          ->get();
          return $data;
      }

      public function get_top_product(){
        $data = DB::table('item')
        ->join('brand', 'item.brand_id', '=', 'brand.brand_id')   
        ->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
        ->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
        ->where([['item.package', '=', 'P1'],['item.status', '=', '1'],])   
        ->get();
        return $data;
      }

      public function get_hot_product(){
        $data = DB::table('item')
        ->join('brand', 'item.brand_id', '=', 'brand.brand_id')   
        ->join('sub_category', 'item.sub_cat_id', '=', 'sub_category.sub_cat_id')
        ->join('product_category', 'item.prd_cat_id', '=', 'product_category.id')
        ->where([['item.package', '=', 'N1'],['item.status', '=', '1'],])   
        ->get();
        return $data;
      }

      public function changepassword($data, $phone){        
        $select = DB::table('user')->where('phone', '=', $phone)->first();
       //var_dump($data->old_password);die;
        if ($select->password == md5($data->old_password)) {
          //echo "Ssss";die;
           $update =  DB::table('user')->where('phone', '=', $phone)->update(array('password' => md5($data->password)));
          if($update){
        return 1;
      }else{
        return 0;
      } 
        }else{
          return "error";
        }
      }

}