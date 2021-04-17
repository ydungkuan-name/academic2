@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'VIEW FILE')
@section('describle-header', '')



@section('content')
<div class="col-md-3">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Filter</h5>

                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Topic</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
                                            </select></div>

                                            <div class="position-relative form-group"><label for="exampleCustomSelect" class="">Faculty</label><select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                <option value="">Select</option>
                                                <option>Value 1</option>
                                                <option>Value 2</option>
                                                <option>Value 3</option>
                                                <option>Value 4</option>
                                                <option>Value 5</option>
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
                                    <div class="card-body"><h5 class="card-title">List file</h5>
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
                                                <tr class="head-tb" >
                                                  <th class="tb-no {{$i=1}}" class="tb-no" style=" width: 40px; text-align: center; ">#</th>

                                                  <td class="tb-checks"><input type="checkbox" value="" id="selectall"></td>
                                                  <th class="tb-name" >NAME</th>
                                                  <th class="tb-type" >TYPE</th>
                                                  <th class="tb-size" >SIZE</th>
                                                  <th class="tb-time" >TIME</th>
                                                  <th class="tb-time"><i class="fas fa-download"></i></th>

                                                </tr>
                                                
                                                
                                                @foreach($data_list as $ls)                                           
                                            
                                                <tr class="fconten">
                                                  <td class="tb-no">{{$i++}}</td>
                                                  <td class="tb-check"><input class="chk" type="checkbox" value="" id="check1"></td>
                                                  <td class="tb-name"><a href="file-detail?file-id={{$ls['id']}}">{{$ls['name']}}</a></td>
                                                  <td class="tb-type">{{$ls['_type']}}</td>
                                                  <td class="tb-size">{{$ls['size']}}</td>
                                                  <td class="tb-time">{{$ls['update_at']}}</td>
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
                         
@stop

