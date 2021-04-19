<?php

namespace App\Http\Controllers\client;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Contribution;
use App\Models\File;
use App\Models\Topic;
















 function storeFile($param, $folder){   
    $get_name = explode('|', $param)[0];
    $conten_base64 = explode('|', $param)[1];



    list($extension, $content) = explode(';', $conten_base64);
    $tmpExtension = explode('/', $extension);
    preg_match('/.([0-9]+) /', microtime(), $m);
    $fileName = $get_name;
    
   // $extension = explode('/', mime_content_type($param))[1];

    $content = explode(',', $content)[1];
    $storage = Storage::disk('public');

    $checkDirectory = $storage->exists($folder);

    if (!$checkDirectory) {
        $storage->makeDirectory($folder);
    }

    $storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

    return $fileName;
}

 function getBase64ImageSize($base64string){ //return memory size in B, KB, MB
    $size_in_bytes = (int) (strlen(rtrim($base64string, '=')) * 3 / 4);
        $size_in_kb    = $size_in_bytes / 1024;
        $size_in_mb    = $size_in_kb / 1024;

        return $size_in_mb;
}

function getFileSizeInKb($base64string){
    $bytes = strlen(base64_decode($base64string));
    $roughsize = (((int)$bytes) / 1024.0)* 0.67;
    return round($roughsize,2);
}







class UploadfileController extends Controller
{
    //
    public function index(Request $request)
    {   
        $ls_topic = Topic::all();
        foreach($ls_topic as $ls){
            if($ls->id == $request->query('topic')){
                return view('pages.client.upload-file',['topic'=>$ls]);
            }
        }
        return redirect('/list-topic');        
    }

    //upload file
    public function uploadFile(Request $request){

        session_start();
        
        $Contributions = new Contribution;
        $lastdb = Contribution::all();
        $Contributions->user_id = $_SESSION['user']['id'];
        $Contributions->topic_id = (int)$request->input('id-topic');
        $Contributions->faculty_id = $_SESSION['user']['faculty'];
        $Contributions->name =$request->input('title');
        $Contributions->create_date ='2021-04-15 15:21:08';
        $Contributions->description =$request->input('description');
        $Contributions->save();

        $last = 0;
        foreach($lastdb as $ls){
            $last =  $ls->id;
         }
        


        //upload file base64
        $arr_id = [];
        $arr_id = explode(",", $request->get('file-id-array')); 

        //$get_name = explode('|', $param)[0];

        foreach ($arr_id as $id) {
            storeFile($request->get($id), 'upload/'.$_SESSION['user']['user']);
            $Files = new File;
            $Files->contribution_id =  $last;
            $Files->name  = explode('|', $request->get($id))[0];            
            $Files->size = '50';
            $Files->path_folder = $_SESSION['user']['user'];
            $Files->save();
        }

        return redirect('/')-> with('jsAlert', 'upload file success');
    }
}
