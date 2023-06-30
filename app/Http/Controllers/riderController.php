<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
//static $Rider=0;



class riderController extends Controller
{
 public function rider_register(){
        return view('rider.rider_register');
    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Driverable_Vehicles= $request->input('Driverable_vehicles');
            $License= $request->input('License');
            $Password= $request->input('Password');

            $user = DB::table('rider')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Driverable_vehicles'=>$Driverable_Vehicles,'License'=>$License,
                'Password'=>$Password);
                DB::table('rider')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';
            }
     }


     public function rider_login(){
        return view('rider.rider_login');
    }

     public function rider_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('rider')->where('Email', session('email'))->first();
        ///////////////// $GLOBALS['Rider_Id']=$user->Rider_Id;\\\\\\\\\\\\\\\\\\\
        $status=$user->Account_status;
        session(['Rider_Id' => $user->Rider_Id]);
        /*$data=array('User_Id'=>$user_id,'User_type'=>'Rider','Activity'=>"view the user profile");
                DB::table('user_activity')->insert($data);*/
        if($status=='Deactivate'){
            echo '<script type="text/javascript">';
            echo ' alert("Your account is Deactivated")';  //not showing an alert box.
           echo '</script>';
           return view('rider.rider_register');

        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                Orders.Delivery_status
                FROM Orders
                INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
                INNER JOIN Member ON Orders.Member_Id = Member.Member_Id;');
                     return view('rider.rider_index',['oders'=>$oder]);
                     $value = session('Rider_Id');

                 }
            else{
                echo '<script type="text/javascript">';
                echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
               echo '</script>';
               return view('rider.rider_register');
             }
        }









     }

     public function profile() {


        $value = session('Rider_Id');

        $users = DB::select('select * from Rider where Rider_Id = ?', [ $value ]);
        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member ON Orders.Member_Id = Member.Member_Id
        WHERE Orders.Member_Id = 1;');
        return view('rider.rider_profile',['users'=>$users,'oders'=>$oder]);


     }
     public function update() {
        $value = session('Rider_Id');
        $users = DB::select('select * from Rider where Rider_Id= ?',[ $value ]);
        return view('rider.rider_update',['users'=>$users]);

     }
    public function update_save(Request $request){
        $Name = $request->input('Name');
        $Contact = $request->input('Contact');
        $Address = $request->input('Address');
        $Email = $request->input('Email');
        $value = session('Rider_Id');

        DB::update('update Rider set Name= ?,Contact=?,Address=?,Email=? where Rider_Id= ?',
        [$Name,$Contact,$Address,$Email,$value]);

        return $this->profile();


    }


    public function delivered(Request $request){
        $Orders_Id = $request->input('Orders_Id');



        DB::update('update orders set Delivery_status= ? where Order_Id=?',
        [' Orders Delivered',$Orders_Id]);
       $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu
        ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member
        ON Orders.Member_Id = Member.Member_Id;');
        $menu = DB::select('select * from menu');
        return view('rider.rider_index',['oders'=>$oder,'menus'=>$menu]);


    }

}
