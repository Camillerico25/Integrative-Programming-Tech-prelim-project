<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">

        <header>
            <div class="d-flex justify-content-center">
                <h1>Integrative Programming Prelim Project</h1>
            </div>
            <nav class="d-flex justify-content-center my-5">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">View1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/view2')}}">View2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/view3')}}">View3</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="d-flex justify-content-center my-5">
            <img src="{{URL::asset('/images/num1.png')}}" alt="number 1">
         </div>
        <footer class="d-flex justify-content-center my-5">
            <h4>Camille Rico BSIT - 3</h4>
        </footer>
        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
