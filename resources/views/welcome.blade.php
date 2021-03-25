<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        
	<!-- CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/welcome/styles.css') }}">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="container vh-100">
        <div class="row">
            <div class="col-xl-6 mt-5 d-flex align-items-center">
                <h1 id="start">PRESS START</h1>
            </div>

            <div class="col-xl-6 text-center mt-5">
                <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" fill="none">
                    <g clip-path="url(#clip0)">
                        <path class="effect" d="M250 0C123 0 18.0005 95 2.00049 219L106 267L297 130C297 130 353 92 401 144C449 196 405 290 322 275L236 336C229 383 200 406 150 406C150 406 82.0005 397 78.0005 330L10.0005 318C40.0005 423 136 500 250 500C388 500 500 388 500 250C500 112 388 0 250 0Z" fill="url(#paint0_linear)"/>
                        <path class="effect" d="M158 382C189.001 382 213 357 213 327C213 296 188.001 272 158 272C127 272 103 297 103 327C103 357 128 382 158 382ZM140 324L124 301L144 287L160 310L182.001 294L196.001 313L174 329L190.001 352L170 366L154 344L132 360L118 341L140 324Z" fill="url(#paint1_linear)"/>
                        <path class="effect" d="M347.001 183C355.001 183 362.001 176 362.001 168C362.001 160 355.001 153 347.001 153C339.001 153 332.001 160 332.001 168C331.001 177 338.001 183 347.001 183Z" fill="white"/>
                        <path class="effect" d="M379 209C387 209 394 202 394 194C394 186 387 179 379 179C371 179 364 186 364 194C364 202 370 209 379 209Z" fill="white"/>
                        <path class="effect" d="M356.001 243C364.001 243 371.001 236 371.001 228C371.001 220 364.001 213 356.001 213C348.001 213 341.001 220 341.001 228C340.001 236 347.001 243 356.001 243Z" fill="white"/>
                        <path class="effect" d="M321.001 218C329.001 218 336.001 211 336.001 203C336.001 195 329.001 188 321.001 188C313.001 188 306.001 195 306.001 203C306.001 211 313.001 218 321.001 218Z" fill="white"/>
                        
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/games') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">
                                    <path id="btnStart" class="effect" d="M282.001 280C281.001 282 279.001 283 277.001 282L270.001 279C268.001 278 267.001 276 268.001 274L284.001 233C285.001 231 287.001 230 289.001 231L296.001 234C298.001 235 299.001 237 298.001 239L282.001 280Z" fill="white"/>
                                </a>
                            @endauth
                        @endif
                        <path class="effect" d="M240 312C239 314 237 315 235 314L228 311C226 310 225 308 226 306L242 265C243 263 245 262 247 263L254 266C256 267 257 269 256 271L240 312Z" fill="white"/>
                    </g>
                    <defs>
                        <linearGradient class="effect" id="paint0_linear" x1="251.198" y1="0" x2="251.198" y2="500" gradientUnits="userSpaceOnUse">
                            <stop offset="0.01" stop-color="#440F9E"/>
                            <stop offset="1" stop-color="#A074DB"/>
                        </linearGradient>
                        <linearGradient class="effect" id="paint1_linear" x1="158.161" y1="-4.67734e-05" x2="158.161" y2="500" gradientUnits="userSpaceOnUse">
                            <stop offset="0.01" stop-color="#440F9E"/>
                            <stop offset="1" stop-color="#A074DB"/>
                        </linearGradient>
                        <clipPath id="clip0">
                            <rect class="effect" width="500" height="500" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>

    <script src="{{ secure_asset('/js/welcome.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        {{-- 4.0.0 para o Carousel funcionar --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
