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
    <div class="container indexheader">
        @yield('header')
    </div>
</header>
<main class="container">
    <div class="container-fluid">
            @yield('content')
    </div>
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

