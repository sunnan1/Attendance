<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peshawar Institute of Cardiology</title>
</head>
    @include('layouts.files_header')
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
@if(isset($page_name))
    @yield('login')
    @else
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('layouts.header')
        <div class="app-main">
            @include('layouts.sidebar')
            <div class="app-main__outer">
                @yield('content')
            </div>
        </div>
    </div>
@endif
</body>
</html>