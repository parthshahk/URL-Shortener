<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>{{$title}} | {{config('app.name')}}</title>
    </head>
    <body>
        
        @include('inc/navbar')

        @include('inc/messages')

        @yield('content')


        <script src="{{asset('js/clipboard.min.js')}}"></script>        
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>