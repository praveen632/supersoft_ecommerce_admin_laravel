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
        return view('layouts.dashboard');
    } 

    public function signup(Request $request){
        $validator = $this->validate($request, [
        'email' => 'required',
        'password' => 'required',
        ]);
       $input = $request->all();
       $email = $request->input('email');
       $password = $request->input('password');
        $SelectRecord = DB::table('user')
                    ->where('user_name', '=', $email)
                    ->orWhere('password', '=', $password)
                    ->first();                  
         $count = count($SelectRecord);
         if ($count == 0)
             {
                Session::flash('message', 'Please Enter Correct Email Address / Username!'); 
                return view('/login');
             }else{                
         /****** Password Check Match *******/  
          $query = DB::table('user')
                    ->where('user_name', '=', $email)
                    ->where('password', '=', md5($password))
                    ->first();  
         $counts = count($query);
        
         if ($counts != 0)
             {
               Session::put('data', $SelectRecord); 
               Session::put('useremail', $SelectRecord->email);
               Session::put('username', $SelectRecord->user_name);
          if (isset($_POST['remember']) && $_POST['remember'] == 'on') 
             {
               /** Set Cookie from here for one hour* */
               setcookie("email", $input['email'], time()+(60*60*1));
               setcookie("password", $input['password'], time()+(60*60*1));  /* expire in 1 hour */
             }
             return Redirect::to('/home');
             }else{
               Session::flash('message', 'Please Enter Correct Password!');
               return view('/login');
             }
           }

        }

        /**********  function call for Logout *************/
    public function checkLogout(Request $request){
        $request->session()->flush();
        return Redirect::to('/login');
      }

       public function change_password(Request $request){
        return view('change_password');
    }

    public function updatePassword(Request $request){
        $validator = $this->validate($request, [
              'Password' => 'required',
              'New_password' => 'required',
              'Conf_password' => 'required|same:New_password',
            ]);
          $req = new usermanagement();
          $changepassword = $req->changepassword($request);
          if($changepassword == 1){
              Session::flash('message', 'Password has been Updated!');
              return Redirect::to('/change_password');
            }elseif($changepassword == 0){
              Session::flash('message', 'database error!');
              return Redirect::to('/change_password');
            }else{
              Session::flash('message', 'Please enter Correct Password!');  
              return Redirect::to('/change_password');
            }
    }
}
