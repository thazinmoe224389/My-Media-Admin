<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>

        <link rel="stylesheet" href="{{asset('csss/style.css')}}">
    </head>
    <body>

    <a href="{{ route('myHome') }}">Home</a> |
    <a href="{{ url('about') }}">About</a> |
    <a href="{{ url('contact') }}">Contact</a>



    @yield('myContent')

    <h1 style="background-color: yellow">This is end of my Content yield method</h1>

    @yield('footer')

    <h1 style="background-color: red">The End</h1>








    </body>
    <script src="{{asset('jss/app.js')}}"></script>

    @stack('myJavaScript')
</html>