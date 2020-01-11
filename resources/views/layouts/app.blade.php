<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{config('app.name','Abhinay Guduri')}}</title>
    <script>
    function toggle(){
       var x = document.getElementById('side-bar');
       if(x.style.display == "block"){
        x.style.display = "none"; 
       }else{
        x.style.display = "block";
       }
    }
    </script>
    </head>
    <body>
            <div id="navbar">
                    <h1 id="heading"><i onclick="toggle()" class="fa fa-bars" id="bars"></i>Abhinay Guduri</h1>
                </div>
                <div id="side-bar" class="float-left">
                        @yield('menus')
                </div>
                <div class="float-left" id="container">
                        
                        <div class="cont" id="author-content">
                                @include('inc.messages')
                             @yield('content')
                        </div>
                    </div>
    </body>
</html>