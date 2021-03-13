@extends('layouts.main')

@section('css-add')
    <link rel="stylesheet" href="{{ url('css/about/styles.css') }}">
@endsection

@section('user_name',Auth::user()->name)

@section('content')
    <br><br>
    <div class="container">
        <div class="games-div p-5">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h1 class="font-30">Sobre</h1>
                    <p class="pt-3">Snesteam é um projeto de escola criado por 4 alunos do 4º ano de Informática do
                        <a class="link-reference" href="https://portal.ifrn.edu.br/campus/caico">Instituto Federal de Ciência e Tecnologia do Rio Grande do Norte Campus Caicó</a>, 
                        inspirado na loja virtualde games <a class="link-reference" href="https://store.steampowered.com/">Steam</a>. 
                        A plataforma consiste em um site onde você pode baixar jogos de Super Nintendo além do emulador que é
                        necessário para rodar os jogos. As principais ferramentas utilizadas no desenvolvimento foram <a class="link-reference" href="https://getbootstrap.com/">Bootstrap</a> para o front-end 
                        e <a class="link-reference" href="https://laravel.com/">Laravel</a> na criação do back-end.
                    </p>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <img width="100%"src="/img/svg/art.svg">
                </div>
            </div>
        </div>

        {{-- Divisor --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <img width="100%" src="{{ url('img/svg/divider.svg') }}">
            </div>
        </div>


        {{-- Equipe --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <h1 class="text-center">NOSSA EQUIPE</h1>
            </div>
        </div>

        <div class="row">
            {{-- Dev --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center mt-5">
                <a href="https://github.com/Pablo1Gustavo" class="github-link">
                    <div class="games-div p-4 github-div-effect">
                        <img class="dev-picture" width="100%" src="/img/img/pablo.png">
                        <h3>Pablo Gustavo</h3>
                        <h4>Desenvolvedor Back-end</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
            </div>

            {{-- Dev --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center mt-5">
                <a href="https://github.com/Pedro-Guilherme-Dantas" class="github-link">
                    <div class="games-div p-4 github-div-effect">
                        <img class="dev-picture" width="100%" src="/img/img/pedro.png">
                        <h3>Pedro Guilherme</h3>
                        <h4>Desenvolvedor Back-end</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
            </div>

            {{-- Dev --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center mt-5">
                <a href="https://github.com/LucasAlmeidda" class="github-link">
                    <div class="games-div p-4 github-div-effect">
                        <img class="dev-picture" width="100%" src="/img/img/lucas.png">
                        <h3>Lucas Almeida</h3>
                        <h4>Desenvolvedor Back-end</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
            </div>

            {{-- Dev --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 text-center mt-5">
                <a href="https://github.com/victormedeiros1" class="github-link">
                    <div class="games-div p-4 github-div-effect">
                        <img class="dev-picture" width="100%" src="/img/img/victor.png">
                        <h3>José Victor</h3>
                        <h4>Desenvolvedor Front-end</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection