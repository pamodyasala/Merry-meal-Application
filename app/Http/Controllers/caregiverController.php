<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Global_;
use PhpParser\Node\Stmt\Static_;




class caregiverController extends Controller
{


    public function caregiver_register(){
        return view('caregiver.caregiver_register');

    }

    public function insert(Request $request) {
            $Fullname = $request->input('Name');
            $Email= $request->input('Email');
            $Address= $request->input('Address');
            $Contact= $request->input('Contact');
            $Member_Id= $request->input('Member_Id');
            $Password= $request->input('Password');

            $user = DB::table('caregiver')->where('Email', $Email)->first();

            if($user==""){
                $data=array('Name'=>$Fullname,'Email'=>$Email,'Address'=>$Address,'Contact'=>$Contact,
                'Member_Id'=>$Member_Id,'Password'=>$Password);
                DB::table('caregiver')->insert($data);

                echo "Record inserted successfully.<br/>";
                echo '<a href = "/insert">Click Here</a> to go back.';


            }
            else{
                echo "Email is Erro.<br/>";
                echo '<a href = "/caregiver_login">Click Here</a> to go back.';
            }
     }


     public function caregiver_login(){
        return view('caregiver.caregiver_login');
    }

     public function caregiver_log(Request $request)
     {
       // private $caregiver_id;
       // $this->$caregiver_id = 1;

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('caregiver')->where('Email', session('email'))->first();



        Static $count=0;
        //$Caregiver_Id=$user->Caregiver_Id;
        //$GLOBALS['Caregiver_Id']=$user->Caregiver_Id;
        //$value = session('key', $user->Caregiver_Id);



        session(['Caregiver_Id' => $user->Caregiver_Id]);
        $status=$user->Account_status;
        if($status=='Deactivate'){

            echo '<script type="text/javascript">';
                echo ' alert("Your account is Deactivated")';  //not showing an alert box.
               echo '</script>';
               return view('caregiver.caregiver_register');
            //echo '<a href = "/caregiver_login">Click Here</a> to go back.';
            //echo $GLOBALS['Caregiver_Id'];


        }
        else{

            $password= $user->Password;
            if($password==session('password')){
                $value = session('Caregiver_Id');
            //echo $value ;
                $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                Orders.Delivery_status
                FROM Orders
                INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
                INNER JOIN Member ON Orders.Member_Id = Member.Member_Id
                WHERE Orders.Member_Id = 1;');
                $menu = DB::select('select * from menu');
               return view('caregiver.caregiver_index',['oders'=>$oder,'menus'=>$menu]);
               // return view('caregiver.caregiver_index');







                 }
            else{

                echo '<script type="text/javascript">';
                echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
               echo '</script>';
               return view('caregiver.caregiver_register');
                 //echo '<a href = "/caregiver_login">Click Here</a> to go back.';
             }

        }

       // return $GLOBALS['Caregiver_Id']=$user->Caregiver_Id;
     }




     public function profile() {

        //$user = DB::table('caregiver')->where('Caregiver_Id', session('Caregiver_Id= 1'))->first();
        $value = session('Caregiver_Id');
        echo $value;
        //$users = DB::select('select * from caregiver where Caregiver_Id= 1');
        $users = DB::select('select * from caregiver where Caregiver_Id = ?', [1]);
       //$users = DB::select('select * from caregiver where Caregiver_Id=?'[ $value]);
        //$member_Id=$user->Member_Id;
       // $oder=DB::select('select * from orders where Member_Id= 1',[$user->Caregiver_Id]);
        return view('caregiver.caregiver_profile',['users'=>$users]);
       // return view('caregiver.caregiver_profile');
       //return $users;
       //echo $value;

     }
     public function update() {

        $users = DB::select('select * from caregiver where Caregiver_Id= 1');
        return view('caregiver.caregiver_update',['users'=>$users]);

     }
    public function update_save(Request $request){
        $Name = $request->input('Name');
        $Contact = $request->input('Contact');
        $Address = $request->input('Address');
        $Email = $request->input('Email');


        DB::update('update caregiver set Name= ?,Contact=?,Address=?,Email=? where Caregiver_Id= 1',
        [$Name,$Contact,$Address,$Email]);

        return $this->profile();


    }

    public function order_page (){

       // $menu=DB::select('select * from menu where Caregiver_Id= 1');
        return view('caregiver.caregiver_oder');
    }


    public function place_order(Request $request){
        $Menu_id = $request->input('Menu_id');
        $Quantiy = $request->input('Quantiy');
        $Preference_for_frozen_foods = $request->input('Preference_for_frozen_foods');
        $value = session('Caregiver_Id');

        $user = DB::table('caregiver')->where('Caregiver_Id', session('Caregiver_Id'))->first();

        $Member_Id=$user->Member_Id;


       $data=array('Menu_ID'=>$Menu_id,'Member_Id'=>$value,'Preference_for_frozen_foods'=>$Preference_for_frozen_foods,
       'Quantiy'=>$Quantiy);
       DB::table('orders')->insert($data);
        echo "Record inserted successfully.<br/>";
        $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id, Member.Member_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
        Orders.Delivery_status
        FROM Orders
        INNER JOIN menu ON Orders.Menu_ID = menu.Menu_Id
        INNER JOIN Member ON Orders.Member_Id = Member.Member_Id
        WHERE Orders.Member_Id = 1;');
        $menu = DB::select('select * from menu');
        return view('caregiver.caregiver_index',['oders'=>$oder,'menus'=>$menu]);
    }
}
