<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class GeneralController extends Controller
{
    //
     //
     public function index(){
        return view('admin');
    }

    function show(){
        $data = Admin::all();
        return  view('admin',['admins'=>$data]);

        //return view('admin');
    }

    

    public function getForm(){
        return view('admin');
    }

    public function create(Request $req){
        $name = $req->get('name');
        return $name;
                                //return redirect()->route('...')->with('jsAlert', $message);

    }
    public function handleRequest(Request $request){
        // nhan het du lieu co trong form
        return $request->all();
    }

    function clickfuntion($id) {
        return $id;
    }

}


