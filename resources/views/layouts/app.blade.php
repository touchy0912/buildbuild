<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buildbuild</title>
        
        <!--css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/buildbuild.css" media='screen and (min-width:700px)'>
        <link rel="stylesheet" type="text/css" href="/css/buildbuild1.css" media='screen and (max-width:700px)'>
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--Java-->
        <script type="text/javascript" src="{{asset('/js/timer.js')}}"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>


        
    </head>
    
    @if(Auth::check())
    
    <body class='body1'>
    @yield('content2')
    

    </body>
    
    @else
    
    <body class='body2'>
    @yield('content2')
    

    </body>
    
    @endif
</html>
