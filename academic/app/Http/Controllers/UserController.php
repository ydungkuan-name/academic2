<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\admin;

class UserController extends Controller
{
    //
    function show(){
        return admin::all();
        //return view();
    }
}
