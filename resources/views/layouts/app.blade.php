<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>Employee Directory</title>
        <!-- Bootstrap CSS -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    
                  
    </head>
    <body>
        <!-- include Header layout -->
        @include('layouts.header')
        <!-- setup to display dynamic page content here -->
        <div class="main-content">
            <div class="container">
                @if(Session::has("message"))
                <div class="alert alert-success">
                    {{ Session::get("message") }}
                </div>
                @endif @if(Session::has("error"))
                <div class="alert alert-danger">
                    {{ Session::get("error") }}
                </div>
                @endif @if(Session::has("info"))
                <div class="alert alert-info">
                    {{ Session::get("info") }}
                </div>
                @endif @if(Session::has("warning"))
                <div class="alert alert-warning">
                    {{ Session::get("warning") }}
                </div>
                @endif

                <div class="row">
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                    <div class="col-md-3">
                        @yield('sidebar')
                        @include('layouts.sidebar')
                    </div>
                </div>
                
            </div>
        </div>
        <!-- include Footer layout -->
        @include('layouts.footer')
        <!-- Bootstrap JavaScript -->
        <script src="/js/app.js">
        </script>
    </body>
</html>
