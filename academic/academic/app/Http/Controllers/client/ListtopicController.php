<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;


class ListtopicController extends Controller
{
    //
    function index(){
        $ls_topic = Topic::all();
        return view('pages.client.list-topic',['listtopic'=>$ls_topic]);
    }
}
