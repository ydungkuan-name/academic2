<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Account;

class LoginController extends Controller
{
    
    //LOGIN
    function login(Request $req){
        $admin = Admin::all(); //Get all database from admin table
        $account = Account::all(); //Get all database from account table
 
        $email = $req->get('email'); //Get email from form input
        $passwd = md5($req->get('passwd')); //Get password from form input
        
        //Compare user name & password from database with form input
        foreach ($admin as $admins){ 
            if($admins->user_name == $email && $admins->passwd  == $passwd){ // compare frome table admin
                    //return to home page when susses;
                    return redirect('/');                   
            }else{
                foreach ($account as $accounts){
                    if($accounts->email == $email && $accounts->passwd  == $passwd){ // compare from table account
                        if($accounts->_status == 0){
                            //Account blocked                            
                            return redirect()->back()-> with('jsAlert', 'Account blocked');

                        }else{
                            //return to home page when susses; 
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

  
}
