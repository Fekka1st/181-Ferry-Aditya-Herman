<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('master/assets/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('master/assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('master/assets/compiled/css/iconly.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('style')
</head>

<body>
    <script src="{{asset('master/assets/static/js/initTheme.js')}}"></script>
    <div id="app">
        @include('layouting.asidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>@yield('title')</h3>
            </div>
            @yield('content')
            @include('layouting.footer')
        </div>
    </div>
    <script src="{{asset('master/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('master/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('master/assets/compiled/js/app.js')}}"></script>
    <script src="{{asset('master/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('master/assets/static/js/pages/dashboard.js')}}"></script>


    @stack('scripts')
</body>

</html>
