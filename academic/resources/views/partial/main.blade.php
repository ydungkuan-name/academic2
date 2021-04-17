<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        @yield('icon-header', config('app.name', '@Master Layout'))
                        <i class="pe-7s-paint icon-gradient bg-sunny-morning"></i>
                    </div>
                    <div>@yield('title-header', config('app.name', '@Master Layout'))
                        <div class="page-title-subheading">@yield('describle-header', config('app.name', '@Master Layout'))</div>
                    </div>
                </div>                               
        </div>
    </div>                        
    <div class="row">
        @yield('content')
    </div>
</div>