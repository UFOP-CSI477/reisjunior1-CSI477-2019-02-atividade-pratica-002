<!DOCTYPE html>
<html lang="br" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            @if(Auth::guest())
           <li class="nav-item"><a class="nav-link"  href="{{route('site.login')}}">Login</a></li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.request')}}">Área do Usuário</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </nav>
    </header>