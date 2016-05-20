<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beheer inschrijvingen</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
</head>
<body>
<header>
    <div class="jumbotron">
        <div class="container">
            <div class="col-sm-9">
                <h1>Beheer inschrijvingen</h1>
                @if (Auth::check())
                    <p>Hallo, {{ Auth::user()->name }}
                        @if(Auth::check())
                            <a href="{{ route('logout') }}" class="btn btn-primary btn-xs">Logout</a>
                        @endif</p>

                @endif
                <div class="container">
                    @yield('header')
                </div>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('home') }}">Terug naar het inschrijvingsformulier</a>
            </div>
        </div>
    </div>
</header>
<main class="container">

    @yield('content')

</main>
<footer>
    <div class="container">
        &copy; {{ date("Y") }} Team Not That Awesome
    </div>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>