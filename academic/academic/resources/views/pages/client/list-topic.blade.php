@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'List topic')
@section('describle-header', 'Wellcome to topic')



@section('content')
                            <div class="col-md-5">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">note</h5>
                                            <div id="exampleAccordion" data-children=".item">
                                                <div class="item">
                                                    <div data-parent="" id="collapseExample" class="xcollapse show"><p class="mb-3">Thank you for your enthusiastic contribution to the school magazine.
                                                        <br>
                                                        Please choose the topic to contribute
                                                    </p></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">List Topic</h5>
                                        <div>
                                            <ul class="list-group">
                                            @foreach($listtopic as $ls)
                                            <button class="list-group-item-action list-group-item"><a href="upload-file?topic={{$ls['id']}}">{{$ls['name']}}</a> <span class="badge badge-secondary badge-pill">{{$ls['open_time']}}</span> - <span class="badge badge-secondary badge-pill">{{$ls['close_time']}}</span></button>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
@stop

