<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class ViewdetailController extends Controller
{
    //
    function index(Request $request){

        $File_ls = File::all();
        foreach($File_ls as $ls){
            if($ls->id == $request->query('file')){
                
                return view('pages.client.view-detail',['topic'=>$ls]);
            }
        }
        return redirect('/view-list'); 
    }
}
