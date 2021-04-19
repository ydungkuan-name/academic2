@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'READ FILE')
@section('describle-header', '')



@section('content')
                            
<div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Infomation</h5>
                                            <ul class="list-group">
                                                <li class="justify-content-between list-group-item"><b>Name: </b>{{$info_file['name']}} </li>
                                                <li class="justify-content-between list-group-item"><b>Type: </b>{{$info_file['_type']}} </li>

                                                <li class="justify-content-between list-group-item"><b>Size: </b>{{$info_file['size']}} </li>
                                                <li class="justify-content-between list-group-item"><b>Upload by: </b>{{$info_file['path_folder']}}</li>
                                                <li class="justify-content-between list-group-item"><b>Date upload: </b>{{$info_file['updated_at']}}</li>

                                            </ul>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-8">
                                <div class="main-card mb-3 card">

                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                        {{$info_file['name']}}  {{$info_file['']}}
                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <button class="btn-icon btn-icon-only btn btn-link"><a href="{{$file_link}}"><i class="pe-7s-cloud-download btn-icon-wrapper"></i></a></button>
                                            
                                        </div>
                                    </div>



                                    <div class="card-body">
                                        <div class="scroll-area-lg">
                                            <div class="scrollbar-container ps--active-y ps">
                                                <p>{{$data_file}}</p>
                                                <iframe style=" width: 100%; height: 100%; "src="https://docs.google.com/gview?url=http://ieee802.org/secmail/docIZSEwEqHFr.doc&embedded=true" frameborder="0">
</iframe>
                                            <div class="ps__rail-x" style="left: 0px; bottom: -404px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 404px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 101px; height: 49px;"></div></div></div>
                                        </div>
                                    
                                    
                                    
                                        <div class="position-relative form-group">
                                            <form action="file-detail" method="POST">
                                            {{ csrf_field()}}
                                                <input name="id-file" type="text" style="display: none;" value="{{ request()->get('file-id') }}"/>
                                                <label for="exampleText" class="">Comment</label>
                                                <textarea name="comment-conten" id="exampleText" class="form-control"></textarea>
                                                <button class="mt-1 btn btn-primary">Comment</button>
                                            </form>
                                        </div>

                                        <br>

                                        <ul id="comment">
                                        @foreach($comment as $lscm)                                       

                                        <li class="main-card mb-3 card" style=" margin-top: 10px; ">
                                                <div class="card-header" style="background-color: #e8e8e8;height: 30px; border-bottom-width:0px">{{$lscm['title']}}
                                               
                                                </div>
                                                <div class="card-body" style="padding: 0.25rem 1.25rem;">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab-eg1-0" role="tabpanel">
                                                            <p>{{$lscm['conten']}}</p>
                                                            <i   class="pe-7s-trash btn-option btn-delete"  id="{{$lscm['id']}}"> </i>
                                                        </div>                                                    
                                                    </div>
                                                </div>
                                        </li>
                                        @endforeach                                            
                                           

                                        </ul>
                                    
                                    
                                    </div>
                                    
                                </div>

                            
                            </div>


                            <style>
                                .btn-option{font-weight: bold; font-size: 16px;cursor: pointer;}

                                .btn-edit{color: blue; margin-right: 6px;}
                                .btn-delete{color: red;}
                            </style>
                            <script>
                                $(document).ready(function(){

                                    $('#model-load').append(
                                        '<form style="display:none" id="form-del" action="file-detail-del" method="POST">'
                                        +'{{csrf_field()}}'
                                        +'<input name="del" id="del-up" type="text" value=""/>'
                                        +'</form>'
                                    );

                                    $('.btn-delete').click(function(){
                                        //alert('delete'+$(this).attr('id'));
                                        
                                        $('#del-up').val($(this).attr('id'));
                                        $( "#form-del" ).submit();


                                    });


                                });
                            </script>
                         
@stop

