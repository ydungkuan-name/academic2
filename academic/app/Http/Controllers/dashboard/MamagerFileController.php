<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Faculty;
use App\Models\File;
use App\Models\Contribution;


class MamagerFileController extends Controller
{
    //
    function index(Request $request){
        session_start();
        $ls_topic = Topic::all();
        
        //$data_file = Contribution::where('faculty_id', $_SESSION['user']['faculty'])->get();
        //$request->query('topic-id');
        $fc = Faculty::where('id', $_SESSION['user']['faculty'])->get();

        $str = Faculty::all();

        $data_file = Contribution::all();
        return view('pages.dashboard.manager-all-file',['data_list'=>$data_file,'faculty'=>$str,'top_pic'=>$ls_topic]);
    
       

    }
    function filer_by_faculty(){
        $data_file = Contribution::where('faculty_id', 2)->get();
        return view('pages.dashboard.manager-all-file',['data_list'=>$data_file]);

    }
    function filer(){
        $data_file = Contribution::all();
        return view('pages.dashboard.manager-all-file',['data_list'=>$data_file]);

    }
    function downloadAll(Request $request){
        $arr_id = explode(",",$request->input('arr-id'));
        $array_file_id = array();
        
        //get id file
        foreach($arr_id as $ls){
            $file_id = File::where('contribution_id', $ls)->get();
            foreach($file_id as $lsf){
                array_push( $array_file_id, $lsf->path_folder.'/'.$lsf->name);
            }
        }
        $filezip =$array_file_id[0];
        foreach($array_file_id as $ls_str){
            $filezip = $filezip.'|'.$ls_str;
        }
        //$data_file = Contribution::all();
        //zip('','hello');
        //echo $data_file;
        return redirect('http://dev.local/dowload/zip.php?download-all='.$filezip);
        //return redirect();
        return redirect()->back()-> with('jsAlert', count($array_file_id).$array_file_id[1]);
    }
}
