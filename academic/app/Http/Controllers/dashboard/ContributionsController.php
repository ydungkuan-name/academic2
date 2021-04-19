<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Faculty;
use App\Models\File;
use App\Models\Contribution;



function zip($files){


    
    $zip_file = 'invoices.zip'; // Name of our archive to download

// Initializing PHP class
$zip = new \ZipArchive();
$zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

$invoice_file = 'app/public/upload/232ded9c-f727-475a-927c-41eddf3fe31b.jpg';

// Adding file: second parameter is what will the path inside of the archive
// So it will create another folder called "storage/" inside ZIP, and put the file there.
$zip->addFile(storage_path($invoice_file), $invoice_file);
$zip->close();

// We return the file immediately after download
return response()->download($zip_file);



}



class ContributionsController extends Controller
{
    //
    function index(Request $request){
        session_start();
        $ls_topic = Topic::all();
        
        //$data_file = Contribution::where('faculty_id', $_SESSION['user']['faculty'])->get();
        //$request->query('topic-id');
        $fc = Faculty::where('id', $_SESSION['user']['faculty'])->get();
        foreach($fc as $fcs){
           $str = $fcs->name;
        }

        if($request->query('topic-id')==null){
            $data_file = Contribution::where('faculty_id', $_SESSION['user']['faculty'])->get();
            return view('pages.dashboard.manager-contribution',['data_list'=>$data_file,'faculty'=>$str,'top_pic'=>$ls_topic]);

        }else{
            $data_file = Contribution::where(['faculty_id'=>$_SESSION['user']['faculty'],'topic_id'=>$request->query('topic-id')])->get();
            return view('pages.dashboard.manager-contribution',['data_list'=>$data_file,'faculty'=>$str,'top_pic'=>$ls_topic]);
        }
        

    }
    function filer_by_faculty(){
        $data_file = Contribution::where('faculty_id', 2)->get();
        return view('pages.dashboard.manager-contribution',['data_list'=>$data_file]);

    }
    function filer(){
        $data_file = Contribution::all();
        return view('pages.dashboard.manager-contribution',['data_list'=>$data_file]);

    }
    function downloadAll(Request $request){
        if($request->input('arr-id')==null){
            return redirect()->back()-> with('jsAlert', 'please seclect to dowload');

        }
        $arr_id = explode(",",$request->input('arr-id'));
        $array_file_id = array();
        
        //get id file
        foreach($arr_id as $ls){
            $file_id = File::where('contribution_id', $ls)->get();
            foreach($file_id as $lsf){
                array_push( $array_file_id,$lsf->path_folder.'/'.$lsf->name);
            }
        }
        
        




        $zip_file = 'contribution.zip'; // Name of our archive to download

        // Initializing PHP class
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        
        $invoice_file = 'app/public/upload/232ded9c-f727-475a-927c-41eddf3fe31b.jpg';
        
        // Adding file: second parameter is what will the path inside of the archive
        // So it will create another folder called "storage/" inside ZIP, and put the file there.
        
        foreach($array_file_id as $ls_str){
            $zip->addFile(storage_path('app/public/upload/'.$ls_str), 'app/public/upload/'.$ls_str);            
        }
        

        $zip->close();
        
        // We return the file immediately after download
        return response()->download($zip_file);











    }
}
