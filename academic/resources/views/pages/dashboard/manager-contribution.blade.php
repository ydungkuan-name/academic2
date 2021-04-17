@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'VIEW FILE')
@section('describle-header', '')



@section('content')
<div class="col-md-3">
                                
                                <div class="main-card mb-3 card">
                                        <div id="add-option" class="card-body"><h5 class="card-title">Filter</h5>
                                        <div class="position-relative form-group"><label for="exampleEmail" class="">Faculty</label>
                                        <input name="email" id="exampleEmail" value="{{$faculty}}" type="email" class="form-control" disabled></div>
                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Topic</label>
                                            <select type="select" id="sl-topic" name="customSelect" class="custom-select">
                                                <option value="0">select</option>
                                                <option value="0">All topic</option>

                                                @foreach($top_pic as $lst)  
                                                <option value="{{$lst['id']}}">{{$lst['name']}}</option>                                         
                                                @endforeach                                             

                                             
                                            </select></div>

                                        
                                        </div>
                                    </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

                            <style>
                                .table-list-file tr th{ 
                                    padding: 10px;
                                }
                                .table-list-file tr td{ 
                                    padding: 10px;
                                }

                                .table-list-file .head-tb{color: #fff;width: 40px;  background-color: #8e8e8e;}
                                .table-list-file tr td a{ 
                                    color: mediumblue;
                                }
                                tr:nth-child(odd) {  background-color: #ececec;  }

                                .table-list-file tr  .tb-no{ 

                                }
                                .table-list-file tr  .tb-check{ 
                                    max-width: 10px;

                                    color: mediumblue;
                                }
                                .table-list-file tr  .tb-name{ 
                                    max-width: 100px;
                                    font-weight: bold;
                                }
                                .table-list-file tr  .tb-type{ 
                                    max-width: 50px;
                                }
                                .table-list-file tr  .tb-size{ 
                                    max-width: 50px;
                                }
                                .table-list-file tr  .tb-time{ 
                                    max-width: 50px;
                                }
                            </style>
                            <script>
                                $(function () {
                                    
                                    $("#selectall").change(function(){
                                    var status = $(this).is(":checked") ? true : false;
                                    $(".chk").prop("checked",status);
                                    });

                                    var $rows = $('#table-list .fconten');
                                    $('#search').keyup(function() {
                                    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase().split(' ');
                                    
                                    $rows.hide().filter(function() {
                                        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                                        var matchesSearch = true;
                                        $(val).each(function(index, value) {
                                        matchesSearch = (!matchesSearch) ? false : ~text.indexOf(value);
                                        });
                                        return matchesSearch;
                                    }).show();
                                    });

                                });
                                                            </script>
                            <div class="col-md-9">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">List file</h5>
                                        <div style=" border-radius: 5px; border: solid 1px #d8d8d8; ">
                                            <div>
                                                
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                      <i id="dowloadall" class="fas fa-download"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                      <i class="fas fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm">
                                                      <i class="fas fa-share"></i>
                                                    </button>
                                                  </div>
                                            
                                            </div>
                                            <table id="table-list" class="table-list-file" style="width:100%" style="border: 1px rgb(224, 224, 224);">
                                                <tr class="head-tb" >
                                                  <th class="tb-no {{$i=1}}" class="tb-no" style=" width: 40px; text-align: center; ">#</th>

                                                  <td class="tb-checks"><input type="checkbox" value="" id="selectall"></td>
                                                  <th class="tb-name" >NAME</th>
                                                  <th class="tb-size" >UPLOAD DATE</th>
                                                  <th class="tb-time"><i class="fas fa-download"></i></th>

                                                </tr>
                                                
                                                
                                                @foreach($data_list as $ls)                                           
                                            
                                                <tr class="fconten">
                                                  <td class="tb-no">{{$i++}}</td>
                                                  <td class="tb-check"><input class="chk" name="chkd" type="checkbox" value="{{$ls['id']}}" id="check1"></td>
                                                  <td class="tb-name"><a href="contribution-detail?contribution-id={{$ls['id']}}">{{$ls['name']}}</a></td>
                                                  <td class="tb-size">{{$ls['create_date']}}</td>
                                                  <td class="tb-time"><a href="file-detail?file-id={{$ls['id']}}"><i class="fas fa-download"></i></a></i></td>
                                                </tr>
                                             
                                                @endforeach                                             


                                              </table>
                                        </div>
                                        <br>
                                        <nav class="" aria-label="Page navigation example">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Previous"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">1</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                                                <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                </div>
                            </div>
                                <form id="form_download" action="manager-contribution-download-all" method="POST">
                                @csrf <!-- {{ csrf_field() }} -->
                                <input name="arr-id" id="arr-id" type="text" value="">
                                </form>
                            <script>

                                 $(document).ready(function() {
                                     //var str={{$faculty}};
                                     //$('#add-option').append(str)
                                     //$('.chk').val();
                                     


                                    //var arr = [];
                                    
                                    $('#dowloadall').click(function(){
                                        var selected = new Array();

                                        $("input:checkbox[name=chkd]:checked").each(function() {
                                        selected.push($(this).val());
                                        });
                                        $('#arr-id').val(selected);
                                        $( "#form_download" ).submit();
                                         //alert(selected);
                                    });






                                    $('#sl-topic').change(function() {                                   
                                       
                                        if($('#sl-topic').val()!=null){
                                            var url = $(location).attr('href').split('?')[0];
                                            window.location.href = url+'?topic-id='+$('#sl-topic').val();

                                        } 
                                        
                                        if($('#sl-topic').val() ==0){
                                            window.location.href = $(location).attr('href').split('?')[0];
                                        }

                                    });
                                });
                            </script>

@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 
                         
@stop

