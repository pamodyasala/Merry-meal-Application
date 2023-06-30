<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function member_register(){
        return view('member.member_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Age= $request->input('Age');
            $Medical_details= $request->input('Medical_details');
            $Password= $request->input('Password');

            $user = DB::table('member')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,'Age'=>$Age,
                'Medical_details'=>$Medical_details,'Password'=>$Password);
                DB::table('member')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function member_login(){
        return view('member.member_login');
    }

     public function member_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('member')->where('Email', session('email'))->first();
         session(['Member_Id' => $user->Member_Id]);
        $status=$user->Account_status;
        if($status=='Deactivate'){
            echo '<script type="text/javascript">';
            echo ' alert("Your account is Deactivated")';  //not showing an alert box.
           echo '</script>';
           return view('member.member_register');
        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                Orders.Delivery_status
                FROM Orders
                INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
                INNER JOIN Member ON Orders.Member_Id = Member.Member_Id
                WHERE Orders.Member_Id = 1;');
                $menu = DB::select('select * from menu');
               // $menu = DB::select('select * from menu');
               return view('member.member_index',['oders'=>$oder,'menus'=>$menu]);
                //return view('member.member_index');
                 }
            else{
                echo '<script type="text/javascript">';
                echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
               echo '</script>';
               return view('member.member_register');
             }
        }









     }



     public function profile() {


        $value = session('Member_Id');

        $users = DB::select('select * from Member where Member_Id = ?', [ $value ]);

        return view('member.member_profile',['users'=>$users]);


     }
     public function update() {
        $value = session('Member_Id');
        $users = DB::select('select * from Member where Member_Id= ?',[ $value ]);
        return view('member.member_update',['users'=>$users]);

     }
    public function update_save(Request $request){
        $Name = $request->input('Name');
        $Contact = $request->input('Contact');
        $Address = $request->input('Address');
        $Email = $request->input('Email');
        $value = session('Member_Id');

        DB::update('update Member set Name= ?,Contact=?,Address=?,Email=? where Caregiver_Id= ?',
        [$Name,$Contact,$Address,$Email,$value]);

        return $this->profile();


    }
}
