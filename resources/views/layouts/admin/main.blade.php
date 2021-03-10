<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name')}} @yield('title') </title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    {{-- Icon --}}
    <link rel="icon" href="{{ url('img/svg/logo.svg') }}" />

    {{-- Google Fonts --}}
        {{-- Cuprum --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cuprum" rel="stylesheet">

        {{-- Montserrat --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/styles.css')}}">

    @yield('css-add')

    <!-- JS -->
    
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-new-dark h-100px">
        <div class="container">
            {{-- Logo --}}
            <a class="navbar-brand mr-50px" href="{{ route('admin.games.index') }}">
                <img src="/img/svg/icon-navbar.svg" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-14 w-100">
                    <li class="nav-item mr-50px">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.users.index') }}">USUÁRIOS</a>
                    </li>
                    <li class="nav-item mr-50px">
                        <a class="nav-link" href="{{ route('admin.games.index') }}">GAMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.comments.index')}}">COMENTÁRIOS</a>
                    </li>
                    {{-- Btn Logout --}}
                    <li class="nav-item mleft-auto">
                        <img src="{{ url('img/svg/profile.svg') }}" class="d-none d-lg-inline d-xl-inline" height="40px" width="40px">
                        <label class="text-light mx-2">ADMIN</label>
                        <a href="#" class="text-decoration-none btn-logout">
                            <form action="/logout" method="POST" style="display:inline">
                                @csrf
                                <img src="{{ url('img/svg/logout.svg') }}" height="30px" width="30px" onclick="event.preventDefault();this.closest('form').submit();">
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        {{-- 4.0.0 para o Carousel funcionar --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="{{ url('js/functions.js') }}"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>