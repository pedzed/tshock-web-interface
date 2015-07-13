<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <title>{{ config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/foundation.css') }}" />
        <link rel="stylesheet" href="{{ url('css/main.css') }}" />
    </head>
    <body>
        <div id="main-wrapper">
            @include('layout/partials/sidebar')
            
            <div id="main-container">
                @include('layout/partials/topbar')
                
                @yield('content')
            </div>
        </div>
        
        <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('vendor/foundation/js/foundation.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </body>
</html>
