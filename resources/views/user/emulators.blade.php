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
                    <p>Um emulador é responsável por reproduzir funções de um ambiente, neste caso, o emulador será o responsável por executar os jogos
                        de Super Nintendo no computador ou smartphone. Basta abrir o emulador, abrir nele o arquivo do jogo, configurar o emulador de
                        acordo com sua preferéncia e jogar. Existem muitos emuladores por aí, com uma rápida pesquisa é possível achar várias opções.</p>
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
                    <p>O emulador Snes9x está a muito tempo no mercado e não deixa a desejar na qualidade, desempenho e compatibilidade, sem dúvidas uma das melhores
                        opções de emulador de Super Nintendo para computador. Abaixo você poderá acessar a página de download e baixar a versão mais recente e compatível
                        com seu sistema operacional.</p>
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
                                <p class="size-game">Página de download</p>
                            </div>
                            {{-- Botão download --}}
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <a href='https://sites.google.com/site/bearoso/' target="_blank" class="btn btn-download">
                                    Acessar ➔
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection