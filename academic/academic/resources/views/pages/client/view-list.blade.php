@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'View file document')
@section('describle-header', 'All member can read file')



@section('content')
<div class="col-md-3">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Filter the data</h5>

                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Topic</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">All</option>
                                                @foreach($data_topic as $ls)
                                                <option value="{{$ls['id']}}">{{$ls['name']}}</option>
                                                @endforeach                                                
                                            </select></div>

                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Faculty</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">All</option>
                                                @foreach($data_faculty as $ls)
                                                <option value="{{$ls['id']}}">{{$ls['name']}}</option>
                                                @endforeach 
                                            </select></div>

                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Student name</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
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

                                .table-list-file .head-tb{color: #fff;width: 40px;  background-color: #213770;}
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
                                    <div class="card-body"><h5 class="card-title">List group buttons</h5>
                                        <div style=" border-radius: 5px; border: solid 1px #d8d8d8; ">
                                            <div>
                                                
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm">
                                                      <i class="fas fa-download"></i>
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
                                                <tr id="add-row" class="head-tb" >
                                                  <th class="tb-no" class="tb-no" style=" width: 40px; text-align: center; ">#</th>

                                                  <th class="tb-name" >NAME</th>
                                                  <th class="tb-type" >TYPE</th>
                                                  <th class="tb-size" >SIZE</th>
                                                  <th class="tb-time" >TIME</th>

                                                </tr>

                                                                                         



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

                            <script>
                                    $(document).ready(function(){
                                        var data = '{{$lsfile}}';
                                    
                                        //$( '#add-row').append(srt);

                                        $.each( obj, function( key, value ) {
                                            $('#table-list tr:last').after(
                                                '<tr class="fconten">'
                                            +     '<td class="tb-no">1</td>'
                                            +     '<td class="tb-name"><a href="view-detail?file=">s </a></td>'
                                            +     '<td class="tb-type"> s</td>'
                                            +     '<td class="tb-size"> s</td>'
                                            +     '<td class="tb-time">s</td>'
                                            +     '</tr>'
                                            );
                                        });


                                    });

                            </script>
                         
@stop

