<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/images/master_floor.ico')}}" rel="icon"/>
    <title>@yield('title', 'Заголовок')</title>
</head>
<body>
<header style="padding-bottom: 30px">
    <nav>
        <img src="{{asset('assets/images/master_floor.png')}}" alt="logo" width="100">
        <ul>
            <li><a href="{{route('partner.index')}}">Партнеры</a></li>
        </ul>
    </nav>
</header>
@yield('main')
</body>
</html>
