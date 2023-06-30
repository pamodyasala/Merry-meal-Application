<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class volunteerController extends Controller
{
    public function volunteer_register(){
        return view('volunteer.volunteer_register');
    }



    public function insert(Request $request) {
            $Name = $request->input('Name');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $NIC= $request->input('NIC');
            $Age= $request->input('Age');
            $Email= $request->input('Email');
            $Hours= $request->input('Working_hours');
            $Password= $request->input('Password');

            $user = DB::table('volunteer')->where('Email', $Email)->first();


        if($user==""){
            $data=array('Name'=>$Name,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
            'Age'=>$Age,'NIC'=>$NIC,'Working_hours'=>$Hours,'Password'=>$Password);
            DB::table('volunteer')->insert($data);

            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
        }
        else{
            echo "Email is Erro.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
        }



     }



     public function volunteer_login(){
        return view('volunteer.volunteer_login');
    }

     public function volunteer_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('volunteer')->where('Email', session('email'))->first();
         //$GLOBALS['volunteer_Id']=$user->volunteer_Id;
         //$_SESSION['volunteer_Id']=$user->volunteer_Id;
       //  $value= session('volunteer_Id', '1');
         session(['volunteer_Id' => $user->Volunteer_Id]);
        $status=$user->Account_status;
        if($status=='Deactivate'){
            echo '<script type="text/javascript">';
            echo ' alert("Your account is Deactivated")';  //not showing an alert box.
           echo '</script>';
           return view('volunteer.volunteer_register');
        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                Orders.Delivery_status
                FROM Orders
                INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
                INNER JOIN Member ON Orders.Member_Id = Member.Member_Id;');
                     return view('volunteer.volunteer_index',['oders'=>$oder]);
                 }
            else{
                echo '<script type="text/javascript">';
                echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
               echo '</script>';
               return view('volunteer.volunteer_register');
             }
        }









     }





     public function profile() {

        $value = session('volunteer_Id');

        $users = DB::select('select * from volunteer where volunteer_Id = ?', [ $value ]);
        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member ON Orders.Member_Id = Member.Member_Id
        WHERE Orders.Member_Id = 1;');


        return view('volunteer.volunteer_profile',['users'=>$users]);


     }
     public function update() {
        $value = session('volunteer_Id');
        $users = DB::select('select * from volunteer where volunteer_Id= ?',[ $value ]);
        return view('volunteer.volunteer_update',['users'=>$users]);

     }
    public function update_save(Request $request){
        $Name = $request->input('Name');
        $Contact = $request->input('Contact');
        $Address = $request->input('Address');
        $Email = $request->input('Email');
        $value = session('volunteer_Id');

        DB::update('update volunte set Name= ?,Contact=?,Address=?,Email=? where volunteer_Id= ?',
        [$Name,$Contact,$Address,$Email,$value]);

        return $this->profile();


    }


    public function Accept_order(Request $request){
        $Orders_Id = $request->input('Orders_Id');



        DB::update('update orders set Delivery_status= ? where Order_Id=?',
        ['Order_Accepted',$Orders_Id]);
       $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
        $menu = DB::select('select * from menu');
        return view('volunteer.volunteer_index',['oders'=>$oder,'menus'=>$menu]);


    }
    public function Prepaed(Request $request){

        $Orders_Id = $request->input('Orders_Id');


        DB::update('update Orders set Delivery_status= ?  where Order_Id= ?',
        ['Order_Prepared',$Orders_Id]);
       $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
        $menu = DB::select('select * from menu');
        return view('volunteer.volunteer_index',['oders'=>$oder,'menus'=>$menu]);


    }








    public function Reject_order(Request $request){
        $Orders_Id = $request->input('Orders_Id');



        DB::update('update orders set Delivery_status= ? where Order_Id=?',
        ['Order_Rejected',$Orders_Id]);
        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
       $menu = DB::select('select * from menu');
       return view('volunteer.volunteer_index',['oders'=>$oder,'menus'=>$menu]);


    }

}
