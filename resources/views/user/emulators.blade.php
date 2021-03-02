@extends('layouts.main')

@section('css-add')
    <link rel="stylesheet" href="{{ url('css/emulator/styles.css') }}">
    <link rel="stylesheet" href="{{ url('css/game-info/styles.css') }}">
@endsection

@section('user_name',Auth::user()->name)

@section('content')
    <br><br>
    <div class="container">
        {{-- Emulador --}}
        <div class="games-div p-5">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <h1 class="font-30">Emulador</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet faucibus mauris. Ut lacinia id massa vel fringilla. 
                            Integer elementum neque eget consectetur molestie. Pellentesque sed risus at tellus feugiat scelerisque et id nibh. 
                            Curabitur accumsan volutpat dui ut blandit. Duis et dui placerat, posuere nibh vel, tincidunt nunc. Suspendisse 
                            potenti. Etiam rutrum neque urna, sit amet semper ligula mollis sit amet. Vestibulum viverra fringilla tortor, 
                            non congue elit accumsan sit amet.</p>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 text-center">
                    <img width="75%" src="/img/img/notebook.png">
                </div>
            </div>
        </div>

        {{-- SNES9X --}}
        <div class="games-div p-5 mt-5">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <h1 class="font-30">Snes9x</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet faucibus mauris. Ut lacinia id massa vel fringilla. 
                            Integer elementum neque eget consectetur molestie. Pellentesque sed risus at tellus feugiat scelerisque et id nibh. 
                            Curabitur accumsan volutpat dui ut blandit. Duis et dui placerat, posuere nibh vel, tincidunt nunc. Suspendisse 
                            potenti. Etiam rutrum neque urna, sit amet semper ligula mollis sit amet. Vestibulum viverra fringilla tortor, 
                            non congue elit accumsan sit amet.</p>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 text-center">
                    <img width="75%" src="/img/img/snes.png">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="download p-2 mt-5">
                        <div class="row">
                            {{-- Tamanho --}}
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-center">
                                <p class="size-game">Tamanho: 1.23 MB</p>
                            </div>
                            {{-- Botão download --}}
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <button class="btn btn-download">
                                    <img src="{{ url('img/svg/download.svg') }}">
                                    Download
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection