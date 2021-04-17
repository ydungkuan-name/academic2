@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'hello titel')
@section('describle-header', 'describle titel')



@section('content')
<div class="col-md-6">
                                
                                <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Simple</h5>
                                            <div id="exampleAccordion" data-children=".item">
                                                <div class="item">
                                                    <button type="button" aria-expanded="true" aria-controls="exampleAccordion1" data-toggle="collapse" href="#collapseExample" class="m-0 p-0 btn btn-link">Toggle item</button>
                                                    <div data-parent="#exampleAccordion" id="collapseExample" class="collapse show"><p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a
                                                        vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.</p></div>
                                                </div>
                                                <div class="item">
                                                    <button type="button" aria-expanded="false" aria-controls="exampleAccordion2" data-toggle="collapse" href="#collapseExample2" class="m-0 p-0 btn btn-link">Toggle item 2</button>
                                                    <div data-parent="#exampleAccordion" id="collapseExample2" class="collapse"><p class="mb-3">Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique
                                                        senectus
                                                        et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">List group buttons</h5>
                                        <div>
                                            <ul class="list-group">
                                                <button class="list-group-item-action list-group-item">Dapibus ac facilisis in <span class="badge badge-secondary badge-pill">15/12/2020-25/12/2021</span></button>
                                                <button class="list-group-item-action list-group-item">Morbi leo risus</button>
                                                <button class="list-group-item-action list-group-item">Porta ac consectetur ac</button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
@stop

