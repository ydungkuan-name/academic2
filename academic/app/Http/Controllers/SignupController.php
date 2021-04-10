<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class SignupController extends Controller
{
    //
    //sign up function
    function storeUser(Request $req){
        $Accounts = new Account;
        $DataAccount = Account::all();

        $user = strtolower($req->get('user'));
        $passwd = $req->get('password');
        $email = strtolower($req->get('email'));
        

        $checku = false;
        $checkm = false;

        foreach($DataAccount as $users){  
            $strU = strtolower($users->user_name);
            $strE = strtolower($users->email);            
            if($strU==$user){$checku=true;}
            if($strE==$email){$checkm=true;}
        }  

        if($checku){
            return redirect()->back()-> with('jsAlert', 'Username has exist! please choose another name');
        }else if($checkm){
            return redirect()->back()-> with('jsAlert', 'Email exist! please choose another E-mail');
        }else{
            //Store data in to database
            $Accounts->user_name = $user;
            $Accounts->email = $req->get('email');
            $Accounts->passwd = md5($passwd);
            $Accounts->_status = 1;
            $Accounts->save();
            return redirect('/')-> with('jsAlert', 'register successfully! login now!');
        }


        
    }
}
