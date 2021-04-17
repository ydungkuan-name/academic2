<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Faculty;
use App\Models\Topic;
use App\Models\User;


class ViewlistController extends Controller
{
    //
    function index(Request $request){
        $File_ls = File::all();
        $data_faculty = Faculty::all();
        $data_topic = Topic::all();

        return view('pages.client.view-list',['lsfile'=>$File_ls, 'data_faculty'=>$data_faculty, 'data_topic'=>$data_topic]);               
    }
}
