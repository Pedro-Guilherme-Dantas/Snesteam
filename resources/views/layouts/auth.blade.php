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
    <link rel="stylesheet" href="{{ asset('css/bg/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form-style/styles.css') }}">

    <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-1 col-sm-2 col-md-3 col-lg-4 col-xl-4"></div>
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 col-xl-4 p-0 d-flex align-items-center vh-100">
                <div class="div-form w-100 p-5">
                    <div class="logo text-center mb-4">
                        <img class="shadow rounded-circle" width="100px" src="{{ url('img/svg/logo.svg') }}">
                    </div>
                    <h2  class="text-center font-weight-bold">@yield('titleFunction')</h2>
                    <div class="row">
                        @yield('errorAuth')
                    </div>
                    @yield('form')
                </div>
            </div>

            <div class="col-1 col-sm-2 col-md-3 col-lg-4 col-xl-4"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		{{-- 4.0.0 para o Carousel funcionar --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    </body>
    </html>