<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin_login(){
        return view('admin.admin_login');
    }

     public function admin_log(Request $request)
     {

         $data=$request->input();
         $request->session()->put('password',$data['password']);
         $request->session()->put('email',$data['email']);

         //$query = "SELECT * FROM volunteer where Email = session('email');";
         $user = DB::table('admin')->where('Email', session('email'))->first();



            $password= $user->Password;
            if($password==session('password')){
                     //return view('volunteer.volunteer_landing');
                    // $oder = DB::select('select * from orders');
                     $oder = DB::select('SELECT Orders.DateTime,menu.Menu_Id,Orders.Order_Id,menu.Name,Member.Name,Member.Address,Orders.Preference_for_frozen_foods,Orders.Quantiy,
                     Orders.Delivery_status
                     FROM Orders
                     INNER JOIN menu
                     ON Orders.Menu_ID = menu.Menu_Id
                     INNER JOIN Member
                     ON Orders.Member_Id = Member.Member_Id;');
                    $menu = DB::select('select * from menu');
                    return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);
                    // return view('admin.admin_index');




             /*   $usersDetails = DB::table('orders')
            ->join('orders', 'menu.Menu_Id', '=', 'orders.Menu_ID')
            ->select('menu.*', 'menu.Name')
            ->get();*/

          /*  $shares = DB::table('shares')
            ->join('users', 'users.id', '=', 'shares.user_id')
              ->join('followers', 'followers.user_id', '=', 'users.id')
                ->where('followers.follower_id', '=', 3)
                 ->get();*/


        /*         $orderList = DB::table('orders')
    ->join('orders', 'menu.Menu_ID', '=', 'orders.Menu_ID')
    ->join('member', 'orders.Member_Id', '=', 'member.Member_Id')
    ->where('users.id', '=', 5)
    ->get();*/

                 }
            else{
                
                 echo '<script type="text/javascript">';
 echo ' alert("Incorrect Password or Username")';  //not showing an alert box.
echo '</script>';
                 return view('admin.admin_login');
             }


     }


     public function insert(Request $request) {
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
            return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);

 }


     public function profile() {


       // $value = session('Rider_Id');
       // echo $value;
       // $users = DB::select('select * from caregiver where Caregiver_Id = ?', [$value]);




     //   return view('rider.rider_profile',['users'=>$users]);
        return view('admin.admin_profile');



     }
     public function caregivermanage() {

        $caregiver = DB::select('select * from caregiver');
         return view('admin.caregivermanage',['caregivers'=>$caregiver]);
      }
      public function donormanage() {
        return view('admin.donormanage');
     }
     public function memberManage() {
        $member = DB::select('select * from member');
        return view('admin.memberManage',['members'=>$member]);

     }
     public function menumanage() {
        return view('admin.menumanage');
     }
     public function partnermanage() {
        $partner = DB::select('select * from partner');
        return view('admin.partnermanage',['partner'=>$partner]);

     }
     public function ridermanage() {
        $rider = DB::select('select * from rider');
        return view('admin.ridermanage',['riders'=>$rider]);

     }
     public function volunteermanage() {
        $volunteer = DB::select('select * from volunteer');
        return view('admin.volunteermanage',['volunteers'=>$volunteer]);

     }






     public function view_menu(){
        $oder = DB::select('select * from orders');
        return view('add_menu',['orders'=>$oder]);
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
        return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);


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
        return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);


    }



   // public function Prepaed(Request $request){
       /* $Menu_Id = $request->input('Menu_Id');
        $Name = $request->input('Name');
        $Description = $request->input('Description');
        $Category = $request->input('Category');

        DB::update('update menu set Menu_Id= ?,Name=?,Description=?, Category=? where menu_Id= ?',
        [$Menu_Id,$Name,$Description,$Category,$Menu_Id]);*/
      //  $Orders_Id = $request->input('Orders_Id');

       // return $Orders_Id;



   // }





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
       return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);


    }


    public function update_menu(Request $request){
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
       return view('admin.admin_index',['oders'=>$oder,'menus'=>$menu]);
}



////////////////////////////////////////////////////////////
public function menue_available(Request $request){
    $Menu_Id = $request->input('Menu_Id');

    DB::update('update menu set Availability= ? where Order_Id=?',
    ['Available',$Menu_Id]);
   $menu = DB::select('select * from menu');
   return view('',['menus'=>$menu]);
}

public function menue_notavailable(Request $request){
    $Menu_Id = $request->input('Menu_Id');

    DB::update('update menu set Availability= ? where Order_Id=?',
    ['Not Available',$Menu_Id]);
   $menu = DB::select('select * from menu');
   return view('',['menus'=>$menu]);
}
/////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////
public function member_active(Request $request){
    $Member_Id = $request->input('Member_Id');

    DB::update('update member set Account_status= ? where Member_Id=?',
    ['Activate',$Member_Id]);
   $member = DB::select('select * from member');
   return view('admin.memberManage',['members'=>$member]);
}

public function member_deactivate(Request $request){
    $Member_Id = $request->input('Member_Id');

    DB::update('update member set Account_status= ? where Member_Id=?',
    ['Deactivate',$Member_Id]);
    $member = DB::select('select * from member');
    return view('admin.memberManage',['members'=>$member]);
}

public function member_edit(Request $request){
    $Menu_Id = $request->input('Menu_Id');

    DB::update('update menu set Account_status= ? where member_Id=?',
    ['Not Available',$Menu_Id]);
    $member = DB::select('select * from member');
   return view('',['members'=>$member]);
}
/////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////
public function caregiver_active(Request $request){
    $caregiver_Id = $request->input('caregiver_Id');

    DB::update('update caregiver set Account_status= ? where caregiver_Id=?',
    ['Activate',$caregiver_Id]);
   $caregiver = DB::select('select * from caregiver');
   return view('admin.caregivermanage',['caregivers'=>$caregiver]);
}

public function caregiver_deactivate(Request $request){
    $caregiver_Id = $request->input('caregiver_Id');

    DB::update('update caregiver set Account_status=? where caregiver_Id=?',
    ['Deactivate',$caregiver_Id]);
    $caregiver = DB::select('select * from caregiver');
    return view('admin.caregivermanage',['caregivers'=>$caregiver]);
}

/*public function caregivers_edit(Request $request){
    $Menu_Id = $request->input('Menu_Id');

    DB::update('update menu set Account_status= ? where member_Id=?',
    ['Not Available',$Menu_Id]);
    $member = DB::select('select * from member');
   return view('',['members'=>$member]);
}*/
/////////////////////////////////////////////////////////


public function partner_active(Request $request){
    $partner = $request->input('partner');

    DB::update('update partner set Account_status= ? where partner_Id=?',
    ['Activate',$partner]);
   $partner = DB::select('select * from partner');
   return view('admin.partnermanage',['partner'=>$partner]);
}

public function partner_deactivate(Request $request){
    $partner = $request->input('partner');

    DB::update('update partner set Account_status= ? where partner_Id=?',
    ['Deactivate',$partner]);
    $partner = DB::select('select * from partner');
    return view('admin.partnermanage',['partner'=>$partner]);
}

/////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////


public function rider_active(Request $request){
    $rider = $request->input('rider');

    DB::update('update Rider set Account_status= ? where Rider_Id=?',
    ['Activate',$rider]);
   $rider = DB::select('select * from rider');
   return view('admin.ridermanage',['riders'=>$rider]);
}

public function rider_deactivate(Request $request){
    $rider = $request->input('rider');

    DB::update('update Rider set Account_status= ? where Rider_Id=?',
    ['Deactivate',$rider]);
    $rider = DB::select('select * from rider');
    return view('admin.ridermanage',['riders'=>$rider]);
}

/////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////


public function volunteer_active(Request $request){
    $volunteer = $request->input('volunteer');

    DB::update('update volunteer set Account_status= ? where Volunteer_Id=?',
    ['Activate',$volunteer]);
   $volunteer = DB::select('select * from volunteer');
   return view('admin.volunteermanage',['volunteers'=>$volunteer]);
}

public function volunteer_deactivate(Request $request){
    $volunteer = $request->input('volunteer');

    DB::update('update volunteer set Account_status= ? where Volunteer_Id=?',
    ['Deactivate',$volunteer]);
    $volunteer = DB::select('select * from volunteer');
   return view('admin.volunteermanage',['volunteers'=>$volunteer]);
}

/////////////////////////////////////////////////////////
}
