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
<body>
    <div id="app">
        @include('layouts.partials.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    @include('layouts.partials.scripts')
</body>
</html>  