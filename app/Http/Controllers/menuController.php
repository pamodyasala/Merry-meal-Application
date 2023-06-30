<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function Symfony\Component\VarDumper\Dumper\esc;

class menuController extends Controller
{
    public function add_menu(){
        return view('add_menu');


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

     public function view_menu(){
        $menu = DB::select('select * from menu');
        return view('menu_view',['menus'=>$menu]);
     }


     public function  forgotpassword(){

        return view('forgotpassword');
     }
     public function  doner(){

        return view('doner');
     }


     public function update_menu(Request $request){
        $Menu_Id = $request->input('Menu_Id');
        $Name = $request->input('Name');
        $Description = $request->input('Description');
        $Category = $request->input('Category');

        DB::update('update menu set Menu_Id= ?,Name=?,Description=?, Category=? where menu_Id= ?',
        [$Menu_Id,$Name,$Description,$Category,$Menu_Id]);
        /*DB::update('update caregiver set Name= ?,Contact=?,Address=?,Email=? where Caregiver_Id= 1',
        [$Name,$Contact,$Address,$Email]);*/

        return $this->view_menu();



    }

 }
