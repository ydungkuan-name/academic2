<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Account;
use App\Models\Role;
use App\Models\Account_user;
use App\Models\Faculty;





class LoginController extends Controller
{
    

    function index(){
        session_start();
        if( empty( $_SESSION[ 'user' ] ) ){
            return  view('login');
        }else{
            return redirect('/');  
        };
    }
    

    //LOGIN
    public function login(Request $request){
        //session_start();
        $admin = Admin::all(); //Get all database from admin table
        $account = Account::all(); //Get all database from account table
        $role = Role::all(); //Get all database from account table
        $user = Account_user::all(); //Get all database from account table
        $faculty = Faculty::all(); //Get all database from account table

        $username = $request->get('user'); //Get email from form input
        $passwd = md5($request->get('passwd')); //Get password from form input


        

        //Compare user name & password from database with form input
        foreach ($admin as $admins){ 
            if($admins->user_name == $username && $admins->passwd  == $passwd){ // compare frome table admin
                session_start();                  

                   $inf=[
                    "id" => 1,
                    "email" => $admins->user_name,
                    "user" =>  $admins->user_name,
                    "image" => $admins->user_name,
                    "name" => $admins->user_name,
                    "role" => 0,
                    "faculty" => 0,
                    "passwd" => $admins->passwd,
                   ];

                   $_SESSION['user'] = $inf;

                    return redirect('/');                   
            }else{
                foreach ($account as $accounts){
                    if($accounts->email == $username && $accounts->passwd  == $passwd){ // compare from table account
                        if($accounts->_status == 0){
                            //Account blocked                            
                            return redirect()->back()-> with('jsAlert', 'Account blocked');

                        }else{
                            //return to home page when susses; 
                            session_start();

                          
                            $image = '';
                            $name = '';
                            $lv = 3;
                            $facultyu = 0;
                            foreach($user as $users){
                                if($users->id_account == $accounts->id){
                                    $image  = $users->images;
                                    $name = $users->name;
                                    $facultyu = $users->faculty;

                                }
                            }

                            foreach($role as $roles){
                                if($roles->accounts_id == $accounts->id){
                                    $lv = $roles->role;

                                }
                            }
                            
                             $inf=[
                            "id" => $accounts->id,
                            "email" => $accounts->email,
                            "user" =>  $accounts->user_name,
                            "image" => $image,
                            "name" => $name,
                            "role" => $lv,
                            "faculty" => $facultyu,
                            "passwd" => $accounts->passwd,
                            ];
                   
                            $_SESSION['user'] = $inf;
                            
                            return redirect('/');        

                            
                        }
                    }else{                          
                        //Return to redirect login when lose
                        return redirect()->back()-> with('jsAlert', 'Account or password incorrect');
                    }
                }
            }
            
        }

       
       
        
    }    
    
    
    public function logout(){
        Auth::logout();
    }

    public function checksession(){
        if (Auth::check()) {
            // Đã đăng nhập.
        } else {
            //chưa đăng nhập.
        }
    }

       
        
    

  
}
