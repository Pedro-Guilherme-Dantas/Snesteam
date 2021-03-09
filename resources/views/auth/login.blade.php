<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

        {{-- Big Shoulders Display --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@900&display=swap" rel="stylesheet">

        
	<!-- CSS -->
    <link rel="stylesheet" href="{{ url('css/login/styles.css') }}">
    <link rel="stylesheet" href="{{ url('css/form-style/styles.css') }}">

    <title>{{ config('app.name') }} - Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-8 vh-100 d-flex align-items-center bg-custom display-custom">
                <div class="div-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ url('img/backgrounds/bg-megamanx-dark.png') }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Megaman X</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ url('img/backgrounds/bg-topgear-dark.png') }}" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Topgear</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ url('img/backgrounds/bg-dkc3-dark.png') }}" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Donkey Kong Country 3</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-5 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-xl-12 p-5">
                        {{-- Login --}}
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="logo text-center mb-4">
                                    <img class="shadow rounded-circle" width="150px" src="{{ url('img/svg/logo.svg') }}">
                                </div>
                                <h2 class="text-center font-weight-bold">LOGIN</h2>
                            </div>
                        </div>

                        <x-jet-validation-errors class="font-12 text-danger font-weight-bold"/>
            
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
            
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
            
                            <div>
                                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                                <x-jet-input id="email" class="block mt-1 w-full data-input text-secondary px-2" placeholder="E-mail" type="email" name="email" :value="old('email')" required autofocus />
                            </div>
            
                            <div class="mt-2">
                                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                                <x-jet-input id="password" class="block mt-1 w-full data-input text-secondary px-2" placeholder="Senha" type="password" name="password" required autocomplete="current-password" />
                            </div>
            
                            <div class="block mt-2">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-1 text-secondary font-14">{{ __('Manter conectado') }}</span>
                                </label>
                            </div>
            
                            <div class="mb-3 mt-3 text-center">
                                <button type="submit" class="p-4 send-button">
                                    {{ __('START') }}
                                </button>
                                <br>
                            </div>

                            <div class="others-links">
                                @if (Route::has('password.request'))
                                    <a class="link-special font-14" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                                <br>
                                @if(Route::has('register'))
                                <a class="link-special font-14" href="{{ route('register') }}">
                                    {{ __('Crie sua conta') }}
                                </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		{{-- 4.0.0 para o Carousel funcionar --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ url('js/functions.js') }}"></script>
</body>
</html>
