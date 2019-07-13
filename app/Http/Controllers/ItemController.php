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

class ItemController extends Controller
{
        public function itemDetails(){
                $id = $_GET['id'];
        	      $req = new usermanagement();
                $data = $req->getproduct();
                $data_s_c = $req->get_sub_cat();        
                $data_br = $req->get_brand();

                $req1 = new item();
                $res = $req1->getDetails($id);
                $res_image = $req1->getImage($id);               
                return view('item.itemdetails', compact('data', 'data_s_c', 'data_br', 'res', 'res_image'));
        }

        public function check_delivery(Request $request){
               $location = $_GET['delivery'];
               $item_id = $_GET['item_id'];
               $req = new item();
               $res = $req->check_delivery($item_id, $location);
               if($res == NULL){
                echo false;
               }else{
                echo true;
               }
        }

        public function address_manage(Request $request){
          $value = $request->session()->get('data');
          //$phone = $_GET['id'];
          $req = new item();
          $req1 = new usermanagement();
          $res = $req->get_useraddr($value->phone);
          $res1 = $req->get_addr($res->id);
          //var_dump($res1);die;
          $data1 = $req1->getinfo($value->phone);
          return view('login.address', compact('res1', 'res', 'data1'));
        }

        public function add_address(Request $request){
           $value = $request->session()->get('data');
           $req1 = new usermanagement();         
           $data1 = $req1->getinfo($value->phone);
           return view('login.add_address', compact('data1'));
        }

        public function add_save(Request $request){
          $validator = $this->validate($request, [
          'pincode' => 'required',
          'locality' => 'required',
          'address' => 'required',
          'city' => 'required',
          'state' => 'required',        
          ]);
          $req = new item();          
          $data = array(  
            'user_id' => $request->id,     
            'pin_code' => $request->pincode,
            'locality' => $request->locality,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'landmark' => $request->landmark,
            'atternate_phone' => $request->alternatePhone,
            'address_type' => $request->locationType,                       
            'status' => '1',   
           );
          $data1 = $req->add_save($data);
          //var_dump($data1);
        if($data1 == true){
            Session::flash('message', 'Record is inserted!');
        }else{
            Session::flash('message', 'Database Error!');
        } 
        return redirect('address_manage'); 
        }

        public function delete_address(Request $request){
         $id = $_GET['id'];
         $req = new item();
         $data = $req->delete_address($id);
         if($data == true){
            Session::flash('message', 'Record is Deleted!');
        }else{
            Session::flash('message', 'Database Error!');
        } 
        return redirect('address_manage');

        }

        public function edit_address(Request $request){
          $value = $request->session()->get('data');
          $id = $_GET['id'];
          $req = new item();
          $req1 = new usermanagement();
          $data = $req->edit_address($id);
          $data1 = $req1->getinfo($value->phone);
         return view('login.edit_address', compact('data', 'data1'));
        }

        public function update_address(Request $request){
         $id = $request->id; 
         $req = new item();
          $data = array(               
            'pin_code' => $request->pincode,
            'locality' => $request->locality,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'landmark' => $request->landmark,
            'atternate_phone' => $request->alternatePhone,
            'address_type' => $request->locationType,                       
            'status' => '1',   
           );
          $data1 = $req->update_save($data, $id);
          //var_dump($data1);
        if($data1 == true){
            Session::flash('message', 'Record is update!');
        }else{
            Session::flash('message', 'Database Error!');
        } 
        return redirect('address_manage'); 
        }


        public function add_cart(Request $request){
          $value = $request->session()->get('data');
           if($value == NULL){
             echo '1';
          }else{
            $data = array( 
              'user_id' => $value->id, 
              'item_id' => $request->item_id,     
              'name' => $request->name,
              'discount' => $request->discount,
              'mrp' => $request->mrp,
              'image' => $request->image,
              'status' => '0'               
             );
          $req = new item();
          $data = $req->add_cart($data);
          if($data == true){
            echo "2";
          }else{
            echo "0";
          }
          }
        }

        public function cart_list(Request $request){
            $value = $request->session()->get('data');
            $req = new item();
            $req1 = new usermanagement(); 
            $data1 = $req->cart_list($value->id);                    
           
                $data = $req1->getproduct();
                $data_s_c = $req1->get_sub_cat();        
                $data_br = $req1->get_brand();
            return view('order.cart_list', compact('data', 'data_s_c', 'data_br', 'data1'));
        }

        public function remove_cart(){
              $id = $_GET['id'];
              $req = new item();
              $data = $req->remove_cart($id);
              echo "1"; 
               // echo "<script>
               //  alert('Remove product!! !!!');
               //  window.location.href='cart_list';
               //  </script>";
        }
}
