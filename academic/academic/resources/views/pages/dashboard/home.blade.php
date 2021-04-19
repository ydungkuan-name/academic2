@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'hello titel')
@section('describle-header', 'describle titel')



@section('content')
                            <div class="col-md-6">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <h5 class="card-title">Doughnut</h5>
                                        <canvas id="doughnut-chart" width="428" height="214" class="chartjs-render-monitor" style="display: block; width: 428px; height: 214px;"></canvas>
                                    </div>
                                </div>
                           
                           
                            </div>

                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <h5 class="card-title">Vertical Bars</h5>
                                        <canvas id="canvas" height="214" class="chartjs-render-monitor" width="428" style="display: block; width: 428px; height: 214px;"></canvas>
                                    </div>
                                </div>
                            </div>
@stop

