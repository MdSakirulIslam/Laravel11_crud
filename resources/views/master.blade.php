<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
<div class="container">
    <a href="" class="navbar-brand">Laravel 11</a>
    <ul class="navbar-nav">
        <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
        <li><a href="{{route('add.info')}}" class="nav-link">Registration</a></li>
        <li><a href="{{route('manage.info')}}" class="nav-link">Registered List</a></li>
    </ul>
</div>
</nav>
@yield('body')
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>

