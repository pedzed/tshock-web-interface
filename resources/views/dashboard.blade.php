<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <title>{{ config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/fotn-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/foundation.css') }}" />
        <link rel="stylesheet" href="{{ url('css/main.css') }}" />
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">
                <h1>{{ config('app.name') }}</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        
        <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('vendor/foundation/js/foundation.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </body>
</html>
