@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'Well come to academic')
@section('describle-header', 'FPT University news site welcomes readers')


@section('content')



@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 

<div class="col-lg-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-premium-dark">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading"><a href="view-list">See a good magazine</a> </div>
                                                <div class="widget-subheading">magazine templates with the highest ratings</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><span>9.5</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-arielle-smile">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading"><a href="{{url('list-topic')  }}">Contribute to the magazine</a></div>
                                                <div class="widget-subheading">Joining hands to contribute news to the magazine</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-4">
                                    <div class="card mb-3 widget-content bg-premium-dark">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Post trending</div>
                                                <div class="widget-subheading">Post is trending of the past week</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><span>VIEW</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                               
                                <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">outstanding image</h5>
                                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="First slide">
                                                </div>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="https://via.placeholder.com/800x400" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">notifications</h5>
                                            <div class="" id="collapseExample123">
                                                
                                                <p> 
                                                In order to improve the quality, prestige and step by step international integration, Journal of Science and Technology - University announced the change in the article review process as follows:
                                                <br>
                                                - Website address: .
                                                <br>
                                                - Account: Authors registered.
                                                </p>
                                                </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

@stop

