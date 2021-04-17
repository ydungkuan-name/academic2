@extends('layouts.master')
@section('title', 'MANAGER FACULTY')

@section('icon-header', '')
@section('title-header', 'MANAGER FACULTY')
@section('describle-header', 'Mamager faculty alow create, update, delete')



@section('content')

@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 
<div class="col-md-5">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Describle</h5>
                                            <div id="exampleAccordionx" data-children=".xitem">
                                                <div class="item ">
                                                    <div data-parent="#exampleAccordion" id="collapseExample" class="collapse show"><p class="mb-3">Allows management of the faculty.</p></div>
                                                </div>
                                                <button id="btn-add-new" class="mb-2 mr-2 btn btn-success"><b>+ Add New Faculty   </b> </button>                                                
                                                <button style="display:none" id="add-new" type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".load-form">Add New Faculty</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">List Faculty</h5>
                                        <div>
                                            <ul class="list-group ">
                                            @foreach($data_fc as $ls)
                                            <button class="list-group-item-action list-group-item ">                                             
                                            <b>{{$ls['name']}}</b> ({{$ls['open_time']}} - {{$ls['close_time']}}) <div style=" float: right; ">
                                            
                                            <input id="name-{{$ls['id']}}" type="text" style="display:none" value="{{$ls['name']}}"/>
                                            <input id="open-{{$ls['id']}}" type="text" style="display:none" value="{{$ls['open_time']}}"/>
                                            <input id="close-{{$ls['id']}}" type="text" style="display:none" value="{{$ls['close_time']}}"/>

                                            <i class="pe-7s-edit btn-option btn-edit" id="{{$ls['id']}}"> </i><i   class="pe-7s-trash btn-option btn-delete"  id="{{$ls['id']}}"> </i></div>
                                            </button>
                                            @endforeach
                                            </ul>
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
                                    var srt='<form id="form-input" action="manager-academic" method="POST">{{ csrf_field()}}<div class="modal fade load-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">'
        +    '<div class="modal-dialog modal-sm">'
        +        '<div class="modal-content">'
        +            '<div class="modal-header">'
        +                '<h5 class="modal-title" id="exampleModalLongTitle">Add academic</h5>'
        +                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'
        +                   ' <span aria-hidden="true">&times;</span>'
        +                '</button>'
        +            '</div>'
        
        +            '<div class="modal-body"><input name="id-course" type="text" value="" id="id-course" style="display:none"/>'
        +           '<div class="position-relative form-group"><label for="" class="">Name</label><input name="name" id="name"  type="text" class="form-control"></div>'
        +           '<div class="position-relative form-group"><label for="" class="">Open date</label><input name="open-day" id="open-day"  type="date" class="form-control"></div>'
        +           '<div class="position-relative form-group"><label for="" class="">Close date</label><input name="close-day"  id="close-day" type="date" class="form-control"></div>'
        
        +           '<div class="position-relative form-group">'
        +            '<label for="" class="">Course</label>'
        +            '<select type="select" id="exampleCustomSelect" name="course-id" class="custom-select">' 
        +            '@foreach($data_ac as $lsac)'
        +            '<option value="{{$lsac["id"]}}">{{$lsac["name"]}}</option> '
        +            '@endforeach'
        +            '</select>'
        +            '</div>'
        +            '</div>'
        +            '<div class="modal-footer">'
        +                '<button id="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'
        +                '<button id="submit-create" type="button" class="btn btn-primary">Save changes</button>'
        +            '</div>'
        +        '</div>'
        +    '</div>'
        +'</div></form>';

     
                                    //add new tag
                                    $('#model-load').append(srt);
                                    //add new form delete
                                    $('#model-load').append(
                                        '<form style="display:none" id="form-del" action="manager-faculty-del" method="POST">'
                                        +'{{csrf_field()}}'
                                        +'<input name="del" id="del-up" type="text" value=""/>'
                                        +'</form>'
                                    );

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
                                        $('#form-input').prop('action', 'manager-faculty');


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
                                        $('#form-input').prop('action', 'manager-faculty-edit');
                                        
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

