<?php

namespace App\Http\Controllers\client;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //show
    function index(){
        session_start();
        if( empty( $_SESSION[ 'user' ] ) ){
            return redirect('/login');  
        }else{
            return view('pages.client.home');
        };
    }
}
