@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'UPLOAD FILE')
@section('describle-header', 'You can upload file have extension doc, docx, png or jpg')



@section('content')
@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 
                            <div class="col-md-4">  
                                   
                                <div class="main-card mb-3 card">
                                <ul class="list-group">
                                <button class="list-group-item-action list-group-item"><b>TOPIC</b></button>

                                        <button class="list-group-item-action list-group-item"><b>Science topic</b> <br><span class="badge badge-secondary badge-pill">15/12/2020</span> - <span class="badge badge-secondary badge-pill">25/12/2021</span></button>
                                    </ul> 
                                </div>                           
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">rules</h5>
                                            <div id="exampleAccordion" data-children=".item">
                                                <div class="item">
                                                    <div data-parent="" id="collapseExample" class="xcollapse show"><p class="mb-3">
                                                      Thank you for your enthusiastic contribution to the school magazine.
                                                        <br>
                                                        Please choose the topic to contribute
                                                        <br>

                                                        {{ request()->get('id') }}
                                                        



                                                    </p></div>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        
                                    </div>
                                   
                            </div>
                            <div class="col-md-8 ">                        

                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Upload file</h5>
                                                <form id="upload" action="upload-file" method="post" enctype="multipart/form-data">
                                                {{ csrf_field()}}
                                                <input style=" display: none;" type="text" name="id-topic" value="{{ request()->get('topic') }}"/>
                                                <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Title</span></div>
                                                        <input name="title" id="titleu" placeholder="titel" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Describe</span></div>
                                                        <input name="description" id="desu" placeholder="Describe" type="text" class="form-control"></div>


                                                    
                                                    
                                                    
                                                    <div class="input-group">
                                                        <div id="file-upload-area">
                                                            <!-- Example 2 -->
                                                            
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
                                                            <label class="form-check-label" for="invalidCheck">
                                                                Agree to terms and conditions
                                                            </label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button id="submit" class="mt-1 btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>




                                       
                                        
                                       
                                        
                                    </div>
                                </div>
                                








                                <style>
	#file-upload-area form {
    margin: 15px;
}
		
.fileuploader {
    display: block;
    padding: 16px;
    margin: 16px 0;
    background: #fafbfd;
    border-radius: 6px;
}

.fileuploader-items .fileuploader-items-list {
    display: block;
    margin: 0 -16px;
    padding: 0;
    list-style: none;
}
.fileuploader-thumbnails-input{
margin: 16px 0 0 16px;
position: relative;
    display: inline-flex;
  
}
#file-upload-area .fileuploader-thumbnails-input-inner{
    padding: 1px;
    width: 80px;
    height: 110px;
border-radius: 3px;
background: #e6ebf4;
    border: 2px dashed #92a7bf;
    text-align: center;
    font-size: 30px;
    color: #90a0bc;
    opacity: 0.9;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

.file-delete-icon{
    cursor: pointer;
    float: right;
    margin: 0 auto;
    display: block;
    width: 15px;
    height: 15px;
}
#file-upload-area .file-image-collec{
    width: 75px;
    height: 75px;
}


#file-upload-area .file-image{
    font-size: 12px;
}
#file-upload-area .file-name{
    font-size: 13px;
    margin: 2px;
}
                        </style>
                        <script>

                            


$(document).ready(function(){

var icon_doc_file = 'data:image/png;base64,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';
var icon_pdf_file = 'data:image/png;base64,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';
var icon_delete_file = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAADbUlEQVRIia2WS2xUZRTHf+e706GdaaeUcVrDgrZEYkHTOJaGWmLAhSaE2FZNU8skHdq6UAJRgw+CielKcIEGfCyMTNuoPITg0EYWRBMfUUhEUlg0BkxaGk2xUi32RVt6j4tp6XS4c0eCZ3OT7/zP/3e++z3uFTKEggzURR9WpQrVIhFTqGoPIVzFts6WdLefz+Qh6RKXN0UCHq9np8BWYIWLx4CKtE/ZZl9ZV2z0P0P6a6IR4F2EUKYuk2JIhZdK452HXSHa1mb6z/ftEeG1OzBPMdS9K8Ir35C2Nnt+zJMsuFsAgCK7Bnr6FNi9AJ4H1EQjCJ/eDSCZpSpbSrs6jgAYgF9qWvIQ9qUqrUAevqoKMMbZyhh8j6zFCuSlZkTQA5c3RQK3IEtk9hWgKFVZ0LqF0K4dBF+IOjKCz0cJvb6dgpbG25NCyJtlvQxgFMRAs5PJ5LkeUCX38Q3kP7N5US7w9GZyn9gAqkyeu+DYhArNCmK11EUrFF51Es0M/I4YQ/aDZWSXr+Hm4B/MXPkNX3VlYnYijBw9yeiprx0hIEtHVofjHlVd53ImGTkSx1MUwr+xmuD2Vkwgj4KmehBh/JsfuX70ZNpaAGyqDMhyV5Eqw+8d5MbFXsSbxbLnIojXy1TvJYY/iIGqa7lgLzcoy9xbAZ2dZfjDjgVDVa4d+BiduZmpFJB7DIbhjDLLIrhtK8jcaxUhuKMVyfK4FwIq/GlQHXQnJAyzy9eg09P8dfAQOj1D9gP3E9zWvABOTxk02NZZN83Shlr8G6sTa/N+jNHu01zb/xGo4n9sPfn1T7ozLHPGzH0P+p0E/kfXkd9QC8Dfnxxn/LtEPxM//MTIZycSTTQ+hW99ZTrElZVfxC6YxIyk00mSUxkGEcZOf8s/J75clLt+vJuxr74HEXxrH3JECBJLPIGh+vrciWnfr6RcLSbXz5LVq5j8+SLY9u0ulkVORTlTvZewx8ZTs0M31LqvrCs2emvV+uqijaIcSjPvOw0V4dnieOfnMHdBApTGOw8r8vb/BHlrHrAIAlASLtkt6F7A/RinDxVhT3G49M3kQcdN3lfb1CDIfhyuf5e4KsKLyTNwhUBiM0xO5exUoRmk2MW8X6A9xzvxTuGxY2NOggzHdc6lpimsRqpQ7jVQaEPivws5Uxrv6MlU/y9zrCHrspp3uwAAAABJRU5ErkJggg==';
var icon_add_file = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAABytJREFUeJzt2dFJnFEURtEzIW2IZYjBMgxMF+kkbeQlbUjsQ/swJcwf0BycvRbc94/7cNlwZwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALhOp+0BwCG3M3O/PeKgp5l52R4BANfgPDNvn+Q8ftAdAO/oy/YAAOD/EwAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBX7cHcNjtzNxvj2DNt+0B/+BhvC1lTzPzsj2Cy07bAzjsPDO/tkcAXPB9Zn5vj+AyXwAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAEHTaHsBhNzNztz2CNQ8z82N7xEE/Z+bP9gjWPM/M6/YIgGtxnpm3T3IeP+gOgHfkCwAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABAkAAAgCABAABBAgAAggQAAAQJAAAIEgAAECQAACBIAABA0Gl7AHDIzczcbY846HlmXrdHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADT9BQlxY9GaV4RoAAAAAElFTkSuQmCC';




    $( '#file-upload-area').append(
        '<div >'
		+	'<input type="file" name="file[]" id="file" multiple style="display:none"/>'
		+	'<div class="fileuploader fileuploader-theme-thumbnails">'
		+		'<ul id="file-root" class="fileuploader-items-list">'
		+			'<li class="fileuploader-thumbnails-input">'
		+				'<div id="add-file" class="fileuploader-thumbnails-input-inner" style="cursor: pointer;">'
        +                    '<div style="height: 14px;">'
        +                        '</div>'
        +                    '<div class="file-image">'
        +                        '<img class="file-image-collec" src="'+icon_add_file+'" style="  height: 68px; width: 100%; "/>'
        +                        '</div>'
        +                    ' <div style="height: 14px;">'
        +                        '<p class="file-name"> </p>'
        +                        '</div>'
        +                    '</div>'
        +                '</li>'
        +            '</ul>'
        +        '</div>'
        +           '<input style=" display: none;" type="text" id="file-id-count"/>'
        +           '<input style=" display: none;" name="file-id-array" type="text" id="file-id-array"/>'

        +  '</div>'
    );





    var j = $('.fileuploader-thumbnails-input').length; // count element add
    $("#file-id-count").val(j);

    var arr_file = [];

    
    

   
     


    $('#file').change(function() {
        if ( ! window.FileReader ) {
			return alert( 'FileReader API is not supported by your browser.' );
		}
		var $i = $( '#file' ), // Put file input ID here
			input = $i[0]; // Getting the element from jQuery


            //---------------get extention--------
            var file_name_string = input.files[0].name;
            var file_name_array = file_name_string.split(".");
            var file_extension = file_name_array[file_name_array.length - 1];
            // end
        if(file_extension == 'doc' | file_extension == 'docx'|file_extension == 'png' | file_extension == 'jpg'| file_extension == 'pdf'){
            

                if ( input.files && input.files[0] ) {
                file = input.files[0]; // The file
                fr = new FileReader(); // FileReader instance

                ji = $("#file-id-count").val();
                ji = Number(ji);
                ji = ji + 1;
                
                $("#file-id-count").val(ji);
                arr_file.push('data-upload-'+ji);                
                $('#file-id-array').val(arr_file);

                   // alert(arr_file.length);
                fr.onload = function () {
                    // Do stuff on onload, use fr.result for contents of file
                    var image_upload = '';
                    if(file_extension == 'pdf'){
                        image_upload = icon_pdf_file;
                    }else if(file_extension == 'doc' | file_extension == 'docx'){
                        image_upload = icon_doc_file;
                    }else{
                        image_upload = fr.result;
                    }
                
                    $( '.fileuploader-items-list').prepend(                    
                        '<li class="fileuploader-thumbnails-input " id="file-id-'+ji+'">'
                    +		'<div class="fileuploader-thumbnails-input-inner">'
                    +            '<div class="delete-id">'
                    +                '<img class="file-delete-icon" id="delf-'+ji+'" src="'+icon_delete_file+'" />'
                    +            '</div>'
                    +            '<div class="file-image">'
                    +                '<img class="file-image-collec" src="'+image_upload+'" style="  height: 68px;width: 100%; "/>'
                    +            '</div>'
                    +            '<div>'
                    +                '<p class="file-name">'+file.name.substr(0, 5)+'...'+file_extension+'</p>'
                    +            '</div>'
                    +            '<input id="data-upload-'+ji+'"  name="data-upload-'+ji+'" type="text" value="'+file.name+'|'+fr.result+'" style="display:none"/>'
                    +		'</div>'
                    +	'</li>'
                    
                    ) 
                };
                //fr.readAsText( file );
                fr.readAsDataURL( file );
                } else {
                    // Handle errors here
                    alert( "File not selected or browser incompatible." )
                }


        }else{
            alert('Do not support this file! please choose againt!');
        }
            
		
    })


    $('#add-file').click(function() {
        $( "#file" ).trigger( "click" );  
    })



   

    $('#file-root').on('click', '.file-delete-icon', function(event) {
        //remove tag file
        var id = event.target.id;
        id = id.split("-")[1]
        var rmid = '#file-id-' + id;
        $(rmid).remove();
        //remove id array
        var rmary = 'data-upload-' + id;
        var index = arr_file.indexOf(rmary);
        if (index !== -1) {
            arr_file.splice(index, 1);
        }
        $('#file-id-array').val(arr_file);

      });
      
   

      $('#submit').click(function(){
            if($('#titleu').val()==''){
              alert("Please input title!");
              return false;
            }else if($('#desu').val()==''){
              alert("Please input describle!");
              return false;
            }else if($('#file-id-count').val()==1){
              alert("Please choose file upload!");
              return false;
            }else if($('#invalidCheck').is(":checked")){
                //alert("Checkbox is checked.");
                return true;
            }
            else if($('#invalidCheck').is(":not(:checked)")){
                alert("Agree to the terms before upload.");
                return false;

            }
            return false;
        });




});

                        </script>
@stop

