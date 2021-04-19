<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




function saveImgBase64($param, $folder)
{
list($extension, $content) = explode(';', $param);
$tmpExtension = explode('/', $extension);
preg_match('/.([0-9]+) /', microtime(), $m);
$fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
$content = explode(',', $content)[1];
$storage = Storage::disk('public');

$checkDirectory = $storage->exists($folder);

if (!$checkDirectory) {
    $storage->makeDirectory($folder);
}

$storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

return $fileName;
}




class UploadController extends Controller
{
    //
    function upload(Request $req){

        $base64_image = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAADbUlEQVRIia2WS2xUZRTHf+e706GdaaeUcVrDgrZEYkHTOJaGWmLAhSaE2FZNU8skHdq6UAJRgw+CielKcIEGfCyMTNuoPITg0EYWRBMfUUhEUlg0BkxaGk2xUi32RVt6j4tp6XS4c0eCZ3OT7/zP/3e++z3uFTKEggzURR9WpQrVIhFTqGoPIVzFts6WdLefz+Qh6RKXN0UCHq9np8BWYIWLx4CKtE/ZZl9ZV2z0P0P6a6IR4F2EUKYuk2JIhZdK452HXSHa1mb6z/ftEeG1OzBPMdS9K8Ir35C2Nnt+zJMsuFsAgCK7Bnr6FNi9AJ4H1EQjCJ/eDSCZpSpbSrs6jgAYgF9qWvIQ9qUqrUAevqoKMMbZyhh8j6zFCuSlZkTQA5c3RQK3IEtk9hWgKFVZ0LqF0K4dBF+IOjKCz0cJvb6dgpbG25NCyJtlvQxgFMRAs5PJ5LkeUCX38Q3kP7N5US7w9GZyn9gAqkyeu+DYhArNCmK11EUrFF51Es0M/I4YQ/aDZWSXr+Hm4B/MXPkNX3VlYnYijBw9yeiprx0hIEtHVofjHlVd53ImGTkSx1MUwr+xmuD2Vkwgj4KmehBh/JsfuX70ZNpaAGyqDMhyV5Eqw+8d5MbFXsSbxbLnIojXy1TvJYY/iIGqa7lgLzcoy9xbAZ2dZfjDjgVDVa4d+BiduZmpFJB7DIbhjDLLIrhtK8jcaxUhuKMVyfK4FwIq/GlQHXQnJAyzy9eg09P8dfAQOj1D9gP3E9zWvABOTxk02NZZN83Shlr8G6sTa/N+jNHu01zb/xGo4n9sPfn1T7ozLHPGzH0P+p0E/kfXkd9QC8Dfnxxn/LtEPxM//MTIZycSTTQ+hW99ZTrElZVfxC6YxIyk00mSUxkGEcZOf8s/J75clLt+vJuxr74HEXxrH3JECBJLPIGh+vrciWnfr6RcLSbXz5LVq5j8+SLY9u0ulkVORTlTvZewx8ZTs0M31LqvrCs2emvV+uqijaIcSjPvOw0V4dnieOfnMHdBApTGOw8r8vb/BHlrHrAIAlASLtkt6F7A/RinDxVhT3G49M3kQcdN3lfb1CDIfhyuf5e4KsKLyTNwhUBiM0xO5exUoRmk2MW8X6A9xzvxTuGxY2NOggzHdc6lpimsRqpQ7jVQaEPivws5Uxrv6MlU/y9zrCHrspp3uwAAAABJRU5ErkJggg==';//$request->input('base64_image'); // your base64 encoded     
        //delo('asd','hasd');
    
        saveImgBase64($base64_image,'ngu');

         //$req->file('file')->store('uploads');

        
        //Kiểm tra file
        $name = $req->file('file')->getClientOriginalName();
        $req->file('file')->storeAs('images', $name, 'local');

        return  $req->file('file')->getClientOriginalName();

    }
}
