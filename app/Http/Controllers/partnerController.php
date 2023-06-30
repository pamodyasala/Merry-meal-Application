<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function partner_register(){
        return view('partner.partner_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Quality_assurance= $request->input('Quality_assurance');
            $Password= $request->input('Password');

            $user = DB::table('partner')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Quality_assurance'=>$Quality_assurance,'Password'=>$Password);
                DB::table('partner')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function partner_login(){
        return view('partner.partner_login');
    }

     public function partner_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         $users=DB::table('partner')->first();
         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('partner')->where('Email', session('email'))->first();
         session(['Partner_Id' => $user->Partner_Id]);
         $status=$user->Account_status;
         if($status=='Deactivate'){
            echo '<script type="text/javascript">';
            echo ' alert("Your account is Deactivated")';  //not showing an alert box.
           echo '</script>';
           return view('partner.partner_register');

        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                Orders.Delivery_status
                FROM Orders
                INNER JOIN menu
                ON Orders.Menu_ID = menu.Menu_Id
                INNER JOIN Member
                ON Orders.Member_Id = Member.Member_Id;');
               $menu = DB::select('select * from menu');

                return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);







                 }
            else{
                echo '<script type="text/javascript">';
                echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
               echo '</script>';
               return view('partner.partner_register');
                 //echo '<a href = "/caregiver_login">Click Here</a> to go back.';
             }

        }


     }

     public function profile() {


        $value = session('Partner_Id');

        $users = DB::select('select * from Partner where Partner_Id = ?', [ $value ]);

        return view('partner.partner_profile',['users'=>$users]);


     }
     public function update() {
        $value = session('Partner_Id');
        $users = DB::select('select * from Partner where Partner_Id= ?',[ $value ]);
        return view('partner.partner_update',['users'=>$users]);

     }
    public function update_save(Request $request){
        $Name = $request->input('Name');
        $Contact = $request->input('Contact');
        $Address = $request->input('Address');
        $Email = $request->input('Email');
        $value = session('Partner_Id');

        DB::update('update Partner set Name= ?,Contact=?,Address=?,Email=? where Partner_Id= ?',
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
        return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);


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
        return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);


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
       return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);


    }



    public function update_menup(Request $request){
        $Menu_Id = $request->input('Menu_Id');
        $Name = $request->input('Name');
        $Description = $request->input('Description');
        $Category = $request->input('Category');

        DB::update('update menu set Menu_Id= ?,Name=?,Description=?, Category=? where menu_Id= ?',
        [$Menu_Id,$Name,$Description,$Category,$Menu_Id]);
        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
       $menu = DB::select('select * from menu');
       return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);
}


public function insertp(Request $request) {
    $Fullname = $request->input('Name');
    $Description= $request->input('Description');
    $Category= $request->input('Category');
    $Image1= $request->input('Image1');
    $Image2= $request->input('Image2');
    $Image3= $request->input('Image3');


        $data=array('Name'=>$Fullname,'Description'=>$Description,'Category'=>$Category,'Image1'=>$Image1,
        'Image2'=>$Image2,'Image3'=>$Image3,'Availability'=>'Available');
        DB::table('menu')->insert($data);

        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
        $menu = DB::select('select * from menu');
        return view('partner.partner_index',['oders'=>$oder,'menus'=>$menu]);

}

}
