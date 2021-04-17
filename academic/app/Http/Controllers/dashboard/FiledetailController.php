<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Comment;

use Illuminate\Support\Facades\Storage;



function read_file_docx($filename){  
    $striped_content = '';  
    $content = '';  
    if(!$filename || !file_exists($filename)) return false;  
    $zip = zip_open($filename);  
    if (!$zip || is_numeric($zip)) return false;  
    while ($zip_entry = zip_read($zip)) {  
    if (zip_entry_open($zip, $zip_entry) == FALSE) continue;  
    if (zip_entry_name($zip_entry) != "word/document.xml") continue;  
    $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));  
    zip_entry_close($zip_entry);  
    }// end while  
    zip_close($zip);  
    $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);  
    $content = str_replace('</w:r></w:p>', "\r\n", $content);  
    $striped_content = strip_tags($content);  
    return $striped_content;  
}




class FiledetailController extends Controller
{
    //
    function index(Request $request){   
        $ls_file = File::all();
        

        $storagePath  = '/academic/storage/app/public/upload/';


        foreach($ls_file as $ls){
            if($ls->id == $request->query('file-id')){
                $disk = storage_path('public/upload');

               $file_link = $storagePath.$ls->path_folder.'/'.$ls->name;  
                $content = read_file_docx($disk.'\student\sample.docx');

                $comment = Comment::where('file_id', $ls->id)->get();


                return view('pages.dashboard.file-detail',['info_file'=>$ls,'data_file'=>$content,'comment'=>$comment,'file_link'=>$file_link]);                
            }
        }

        return redirect('dash-board/manager-contribution');  

    }



    function comment(Request $request){
        session_start();
        $comments = new Comment;
        $comments->file_id = $request->input('id-file');
        $comments->user_id = $_SESSION['user']['id'];
        $comments->title = $_SESSION['user']['name'];
        $comments->conten = $request->input('comment-conten');
        $comments->save();
        return redirect()->back()-> with('jsAlert', 'Added success');

    }
    function update_comment(){
        return redirect()->back()-> with('jsAlert', 'Added success');

    }
    function delete_comment(Request $request){
        $comments = Comment::findOrFail($request->input('del'));
        $comments->delete();
        return redirect()->back()-> with('jsAlert', 'Added success');

    }
}
