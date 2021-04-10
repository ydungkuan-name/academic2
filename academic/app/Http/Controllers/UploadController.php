<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req){
         //$req->file('file')->store('uploads');

        
        //Kiểm tra file
        $name = $req->file('file')->getClientOriginalName();
        $req->file('file')->storeAs('images', $name, 'local');

        return  $req->file('file')->getClientOriginalName();

        
    }
}
