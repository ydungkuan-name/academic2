<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Language" content="en"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/icon type"/>
    <title>@yield('title', config('app.name', '@Master Layout'))</title>
	<link href="{{ asset('./assets/main.css') }}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<!---------------------------  header----------------------->
@include('partial.header')
<!--------------------------- end header----------------------->




 <main class="app-main">
        <!-----------------nav sidebar------------------->
        @include('partial.nav')
        <!-----------------end nav sidebar------------------->

        <!------------------end footer main---------------------->
        <div class="app-main__outer">
            <!----------------main conten---------------------->           
            @include('partial.main')
            <!----------------end main conten---------------------->
           


            <!----------------footer main---------------------->
            @include('partial.footer')
            <!----------------end footer main---------------------->
        </div>
        <!-----------------------main------------------------>
    </main>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ asset('./assets/assets/scripts/main.js') }}"></script>
</body>
</html>

<div id="model-load"></div>
<!-------------model create---------------->
