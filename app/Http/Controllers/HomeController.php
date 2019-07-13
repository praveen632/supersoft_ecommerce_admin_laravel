<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\usermanagement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
        $data_top = $req->get_top_product();
        $data_hot = $req->get_hot_product();
        Session::put('data_top', $data_top);
        Session::put('data_hot', $data_hot);

        return view('layouts.dashboard', compact('data', 'data_s_c', 'data_br'));
    } 

    public function login(){
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
        return view('login.login', compact('data', 'data_s_c', 'data_br'));
    }

    public function signup(Request $request){
        //echo "sdd";die;
        // $validator = $this->validate($request, [
        //     'username' => 'required',
        //     'password' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',    
        // ]);

        $req = new usermanagement();
        $data = array(
            'user_name' => $request->username, 
            'password' => md5($request->password),
            'email' => $request->email1,
            'phone' => $request->phone,
            'status' => '0',
            );
       
        $res = $req->signup($data);
        if($res == true){
            return json_encode($res);

            // Session::put('data', $res); 
            // Session::put('useremail', $res->email);
            // Session::put('username', $res->user_name);
            // echo "<script>
            // alert('Signup Successfully!!!');
            // window.location.href='index';
            // </script>";
        }else if($res == 0){ 
          echo "0";          
            // echo "<script>
            // alert('This Email Id and Phone Already Registered!!!');
            // window.location.href='index';
            // </script>";
        }       
        
    }


    public function update_otp(){
         $otp = $_POST['otp'];
         $mobile = $_POST['mobile'];
         $req = new usermanagement();
         $data = $req->update_otp($otp, $mobile);         
         if($data == false){
            echo "You are inter wrong otp!!";
         }else{
            Session::put('data', $data); 
            Session::put('useremail', $data->email);
            Session::put('username', $data->user_name);
            echo "Successfully Login!!";
         }
    }

    public function logins(Request $request){
         $validator = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',              
        ]);

        $req = new usermanagement();
        $user = $request->username; 
        $password= $request->password;
        $data = $req->loginCheck($user, $password);
        
        if($data == '0'){
            echo "<script>
            alert('Email id And Phone not Correct !!!');
            window.location.href='index';
            </script>"; 
        }else if($data == '1'){
            echo "<script>
            alert('Credencial is not Correct !!!');
            window.location.href='index';
            </script>";
        }else{
             Session::put('data', $data); 
             Session::put('useremail', $data->email);
             Session::put('username', $data->user_name);
             echo "<script>
                alert('Login Successfully!!!');
                window.location.href='index';
                </script>";
        }
    }

    public function logout(Request $request){
         $request->session()->flush();
         return Redirect::to('/index');
    }


    public function forgot_password(Request $request){
         $req = new usermanagement();
         $email = $_POST['email'];
         if(is_numeric($email)){
           $data = $req->send_otp($email);
          if($data == '0'){
            return "Mobile No. is not vailed!!";
          }else{
            $request->session()->flush();
            echo "otp_upate"; 
          }
         }else{
             $data = $req->send_mail($email); 
             if($data == '0'){
                return "Email id is not vailed!!";
             }else if($data == true){
                 return "Please check your email for reset password!!";
             }else{
                return "Mail not send!!!";
             } 
         }                
    }

    public function resetpassword(){
        $email = $_GET['key'];
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
        return view('login.resetpassword', compact('data', 'data_s_c', 'data_br', 'email'));
    }

    public function resetpasswordupdate(Request $request){
        $email = $request->input('email');
        $password = md5($request->input('password'));
        $req = new usermanagement();
        $data = $req->reset_upadte($email, $password);
        if($data == '0'){
            echo "<script>
            alert('Password reset UnSuccessfully!!!');
            window.location.href='resetpassword';
            </script>";
        }else{
            $request->session()->flush();
            //return Redirect::to('/index');
           echo "<script>
            alert('Password reset Successfully!!!');
            window.location.href='index';
            </script>";
        }
    }

    public function myprofile(Request $request){
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
        $id = $_GET['id'];        
        $data1 = $req->getinfo($id);        
        return view('login.profile', compact('data1', 'data', 'data_s_c', 'data_br'));
    }

    public function subCat(){
        $id = $_GET['id'];
        $req = new usermanagement();
        $data = $req->getsubcat($id);
        return $valu = json_encode($data);
    }

    public function getBrand(){
         $id = $_GET['id'];
         $req = new usermanagement();
         $data = $req->getbrand($id);
         return $valu = json_encode($data);
    }

    public function getItem(){
        $id = $_GET['id'];
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand(); 
        $data1 = $req->getItem($id);        
         return view('item.item', compact('data','data_s_c', 'data_br', 'data1'));
    }

    public function change_password(Request $request){
        $value = $request->session()->get('data');
        $id = $value->phone;
        $req = new usermanagement();
        $data = $req->getproduct();
        $data_s_c = $req->get_sub_cat();        
        $data_br = $req->get_brand();
        //$id = $_GET['id'];        
        $data1 = $req->getinfo($id);
        return view('login.change_password', compact('data1', 'data', 'data_s_c', 'data_br', 'id'));
    }

    public function update_change_password(Request $request){

        // $validator = $this->validate($request, [
        //       'old_password' => 'required',
        //       'password' => 'required',
        //       'conf_password' => 'required|same:New_password',
        //     ]);
         $phone = $request->input('phone');
         // $password = $request->input('password'); 
         // $password = $request->input('conf_password');
        $req = new usermanagement();
          $changepassword = $req->changepassword($request, $phone);
          if($changepassword == 1){
              Session::flash('message', 'Password has been Updated!');
              return Redirect::to('/change_password');
            }else if($changepassword == 0){
              Session::flash('message', 'database error!');
              return Redirect::to('/change_password');
            }else{
              Session::flash('message', 'Please enter Correct Password!');  
              return Redirect::to('/change_password');
            }
    }

    // public function signup(Request $request){
    //     $validator = $this->validate($request, [
    //     'email' => 'required',
    //     'password' => 'required',
    //     ]);
    //    $input = $request->all();
    //    $email = $request->input('email');
    //    $password = $request->input('password');
    //     $SelectRecord = DB::table('user')
    //                 ->where('user_name', '=', $email)
    //                 ->orWhere('password', '=', $password)
    //                 ->first();                  
    //      $count = count($SelectRecord);
    //      if ($count == 0)
    //          {
    //             Session::flash('message', 'Please Enter Correct Email Address / Username!'); 
    //             return view('/login');
    //          }else{                
    //      /****** Password Check Match *******/  
    //       $query = DB::table('user')
    //                 ->where('user_name', '=', $email)
    //                 ->where('password', '=', md5($password))
    //                 ->first();  
    //      $counts = count($query);
        
    //      if ($counts != 0)
    //          {
    //            Session::put('data', $SelectRecord); 
    //            Session::put('useremail', $SelectRecord->email);
    //            Session::put('username', $SelectRecord->user_name);
    //       if (isset($_POST['remember']) && $_POST['remember'] == 'on') 
    //          {
    //            /** Set Cookie from here for one hour* */
    //            setcookie("email", $input['email'], time()+(60*60*1));
    //            setcookie("password", $input['password'], time()+(60*60*1));  /* expire in 1 hour */
    //          }
    //          return Redirect::to('/home');
    //          }else{
    //            Session::flash('message', 'Please Enter Correct Password!');
    //            return view('/login');
    //          }
    //        }

    //     }

    //     /**********  function call for Logout *************/
    // public function checkLogout(Request $request){
    //     $request->session()->flush();
    //     return Redirect::to('/login');
    //   }

    //    public function change_password(Request $request){
    //     return view('change_password');
    // }

    // public function updatePassword(Request $request){
    //     $validator = $this->validate($request, [
    //           'Password' => 'required',
    //           'New_password' => 'required',
    //           'Conf_password' => 'required|same:New_password',
    //         ]);
    //       $req = new usermanagement();
    //       $changepassword = $req->changepassword($request);
    //       if($changepassword == 1){
    //           Session::flash('message', 'Password has been Updated!');
    //           return Redirect::to('/change_password');
    //         }elseif($changepassword == 0){
    //           Session::flash('message', 'database error!');
    //           return Redirect::to('/change_password');
    //         }else{
    //           Session::flash('message', 'Please enter Correct Password!');  
    //           return Redirect::to('/change_password');
    //         }
    // }
}
