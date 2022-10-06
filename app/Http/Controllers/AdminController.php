<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use DB;

//use App\Blooddoner;

use App\Models\Blooddoner;

//Adminlogin
use App\Models\Adminlogin;

use Session;

session_start();

class AdminController extends Controller
{
    



public function frontendpageshow(){


    return view('bloodbank.frontend.bloodbankfrontend');


}



//blooddonerfromsubmit

public function blooddonerfromsubmit(Request $request){


    $data = $request->all();

    $today = date("d-m-Y");

    $doner = new Blooddoner;

    $doner->doner_name = $data['doner_name'];
    $doner->doner_email = $data['doner_email'];
    $doner->doner_phn = $data['doner_phn'];
    $doner->doner_age = $data['doner_age'];
    $doner->doner_district = $data['doner_district'];
    $doner->doner_blood_group = $data['doner_blood_group'];
    $doner->doner_age = $data['doner_age'];
    $doner->doner_resgister_date = $today;
   
    $doner->save();

   return redirect('/');


   // return $data;


}




//adminloginpageshow

public function adminloginpageshow(){


 return view('bloodbank.backend.login');


}




//adminloginfromaction




public function adminloginfromaction(Request $request){

    $email = $request->admin_email;
    $password = md5($request->admin_password);


    $emailckeck = Adminlogin::where(['admin_email'=>$email,'admin_password'=>$password])->first();

    if($emailckeck){
        
        $myadminname = $emailckeck->admin_name;
        
        Session::put('adminname',$myadminname)  ;

       return redirect('/admin_dashboard');  


    }else{

    

     return redirect('/admin');

    }


}














//admindashboardpageshow



public function admindashboardpageshow(){


$all_doner = Blooddoner::get();


//return view('admin.employees.add_employees')->with(compact('all_employees'));

$name = Session::get('adminname');

 return view('bloodbank.backend.admindashboard')->with(compact('all_doner','name'));


}


//blooddonerdelete


public function blooddonerdelete($doner_id){


Blooddoner::where(['doner_id'=>$doner_id])->delete();


     return redirect('/admin_dashboard');

}


//donerstatussuccess

public function donerstatussuccess($doner_id){

Blooddoner::where(['doner_id'=>$doner_id])->update(['doner_status'=>1]);


     return redirect('/admin_dashboard');


}


//adminlogout


public function adminlogout(){

   Session::forget('adminname');
   
   return redirect('/admin'); 


}



}



