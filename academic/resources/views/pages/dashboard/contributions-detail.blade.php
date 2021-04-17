@extends('layouts.master')
@section('title', 'MANAGER Topic')

@section('icon-header', '')
@section('title-header', 'CONTRIBUTION')
@section('describle-header', '')



@section('content')

@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 
<div class="col-md-5">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Contribution Infomation</h5>
                                            <ul class="list-group">
                                                <li class="justify-content-between list-group-item"><b>Title: </b>{{$contributions_data['name']}} </li>
                                                <li class="justify-content-between list-group-item"><b>Description: </b>{{$contributions_data['description']}}</li>

                                                <li class="justify-content-between list-group-item"><b>File Total: </b>{{$total_file}}</li>
                                                <li class="justify-content-between list-group-item"><b>Upload by: </b>{{$user_ac}}</li>
                                                <li class="justify-content-between list-group-item"><b>Date upload: </b>{{$contributions_data['create_date']}}</li>

                                            </ul>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-7">



                          
                                <div class="main-card mb-3 card">
                                    
                                    <div class="card-body"><h5 class="card-title">List File</h5>
                                        <div>
                                            <ul class="list-group ">
                                            @foreach($ls_file as $ls)
                                            <button class="list-group-item-action list-group-item ">                                             
                                            <i class="pe-7s-copy-file"style=" font-weight: bold; color: #505050; font-size: 18px; "> </i><a href="file-detail?file-id={{$ls['id']}}"><b class="file-name">{{$ls['name']}}</b></a> 
                                            <div style=" float: right; ">
                                            
                                            <input id="name-" type="text" style="display:none" value=""/>
                                            <input id="open-" type="text" style="display:none" value=""/>
                                            <input id="close-" type="checkbox"  value=""/>
                                            <a href="/academic/storage/app/public/upload/{{$user_upload}}/{{$ls['name']}}"><i class="fas fa-download"style=" font-weight: bold; color: blue; font-size: 15px; "> </i></a>

                                        </div>
                                            </button>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="card-body">
                                    <div style=" float: right; ">
                                    <input id="close-" type="checkbox"  value=""/>
                                    <i class="fas fa-download"style="font-weight: bold;color: #6f15ff;font-size: 18px;"> </i>

                                    </div>
                                        
                                        
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
                                    $(function(){
                                    $(".file-name").each(function(i){
                                        len=$(this).text().length;
                                        if(len>10)
                                        {
                                        $(this).text($(this).text().substr(0,50)+'...');
                                        }
                                    });       
                                    });
     
                                    

                                    //check validation 
                                    $('#submit-create').click(function(){
                                        var name = $('#name').val();
                                        var opend = $('#open-day').val();
                                        var closed = $('#close-day').val();
                                        if(name == ''){
                                            alert('Plase input name!');
                                        }else if(opend == ''){
                                            alert('Plase input open date!');
                                        }else if(closed == ''){
                                            alert('Plase input close date!');
                                        }else{
                                            $( "#form-input" ).submit();
                                            //$('#close').trigger('click');
                                            //alert('Added!');

                                        }
                                        //return true;
                                    });

                                    //call form add
                                    $('#btn-add-new').click(function(){
                                        //reset form
                                        $('#name').val('');
                                        $('#open-day').val('');
                                        $('#close-day').val('');
                                        $('#submit-create').text('Create');

                                        //call form
                                        $('#add-new').trigger('click');
                                        //edit title
                                        $('.modal-title').text('Add New');
                                        //replace propertit acrion form
                                        $('#form-input').prop('action', 'manager-topic');


                                    });

                                    //update
                                    $('.btn-edit').click(function(){

                                        
                                        //set value for form
                                        
                                        $('#id-course').val($(this).attr('id'));

                                        $('#name').val($('#name-'+$(this).attr('id')).val());
                                        $('#open-day').val($('#open-'+$(this).attr('id')).val());
                                        $('#close-day').val($('#close-'+$(this).attr('id')).val());
                                        $('#submit-create').text('Update');

                                        //call form
                                        $('#add-new').trigger('click');
                                        //edit title
                                        $('.modal-title').text('Edit');
                                        //replace propertit acrion form
                                        $('#form-input').prop('action', 'manager-topic-edit');
                                        
                                        //alert();

                                    });

                                    //delete
                                    $('.btn-delete').click(function(){
                                        //alert('delete'+$(this).attr('id'));
                                        
                                        $('#del-up').val($(this).attr('id'));
                                        $( "#form-del" ).submit();


                                    });

                                });
                            </script>
@stop

