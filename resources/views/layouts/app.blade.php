<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solo Interior | Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.partials.styles')    
</head>
<body class="homepage">
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        @include('layouts.partials.header')
        @include('layouts.partials.nav')
        

        @yield('content')
   
        @include('layouts.partials.footer')
    <!-- Scripts -->
    
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
    @include('layouts.partials.scripts')
</body>
</html>  