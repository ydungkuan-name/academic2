@extends('layouts.master')
@section('title', 'Home - Dashboard')

@section('icon-header', '')
@section('title-header', 'hello titel')
@section('describle-header', 'describle titel')



@section('content')
<style>
.app-theme-white .app-footer .app-footer__inner, .app-theme-white .app-header {  display: none;}
.app-theme-white .app-page-title {    display: none;}
.app-theme-white .app-sidebar {    display: none;}
.fixed-sidebar .app-main .app-main__outer { z-index: 9;   padding-left: 0px; }
</style>
<div class="col-md-12 d-flex justify-content-center">
                                        
                                        <div class="main-card mb-12 card">
                                            <div class="card-body"><h5 class="card-title">Login to website</h5>
                                            <form action="{{ url('login') }}" method="POST" role="form">
                                            {{ csrf_field()}}
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">User name</span></div>
                                                        <input placeholder="User name or E-mail" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                                        <input placeholder="Password" type="text" class="form-control"></div>


                                                    
                                                    
                                                    <br>

                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
                                                            <label class="form-check-label" for="invalidCheck">
                                                                Agree to terms and conditions
                                                            </label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button id="submit" class="mt-1 btn btn-primary">Login</button>
                                                </form>
                                            </div>
                                        </div>

                                </div>
@stop

@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 

