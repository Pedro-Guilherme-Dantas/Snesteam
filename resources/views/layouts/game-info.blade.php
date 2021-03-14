@extends('layouts.main')

@section('css-add')
    <link rel="stylesheet" href="{{ asset('css/game-info/styles.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="games-div p-5">
                    <div class="row">
                        {{-- Informações --}}
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <h1>Super Mario World</h1>
                            <p class="pt-3">
                                Super Mario World é um jogo de plataforma bidimensional no qual o jogador controla o protagonista na 
                                tela (Mario ou Luigi) a partir de uma perspectiva de Side-scrolling. As ações mecânicas do jogo são 
                                semelhantes a títulos anteriores da série —Super Mario Bros., Super Mario Bros.
                            </p>

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

                        {{-- Imagens --}}
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-lg-4 pl-xl-4 pt-sm-5 pt-5 pt-lg-0 pt-xl-0">
                            {{-- Imagem principal --}}
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    {{-- Carousel --}}
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner shadow-images">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ url('img/img/mario-new.jpg') }}" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ url('img/img/mario2.jpg') }}" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ url('img/img/mario3.jpg') }}" alt="Third slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ url('img/img/mario4.jpg') }}" alt="Fourth slide">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            {{-- Outras imagens --}}
                            <div class="row">
                                <div class="col col-sm col-md col-lg col-lx pl-0 pt-2 pr-1">
                                    <img src="{{ url('img/img/mario1.jpg') }}" data-target="#carouselExampleIndicators" data-slide-to="0" width="100%" class="active shadow-images">
                                </div>
                                <div class="col col-sm col-md col-lg col-lx p-0 pt-2 px-1">
                                    <img src="{{ url('img/img/mario2.jpg') }}" data-target="#carouselExampleIndicators" data-slide-to="1" width="100%" class="shadow-images">
                                </div>
                                <div class="col col-sm col-md col-lg col-lx p-0 pt-2 px-1">
                                    <img src="{{ url('img/img/mario3.jpg') }}" data-target="#carouselExampleIndicators" data-slide-to="2" width="100%" class="shadow-images">
                                </div>
                                <div class="col col-sm col-md col-lg col-lx p-0 pt-2 pl-1">
                                    <img src="{{ url('img/img/mario4.jpg') }}" data-target="#carouselExampleIndicators" data-slide-to="3" width="100%" class="shadow-images">
                                </div>
                            </div>
                        </div>  


                    </div>
                </div>
            </div>
        </div>

        {{-- Divisor --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                <img width="100%" src="{{ url('img/svg/divider.svg') }}">
            </div>
        </div>

        {{-- Comentários --}}
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h2>Comentários</h2>
                </div>
            </div>

            <div class="comments px-5">
                <div class="row">
                    <div class="col-md-12 my-5 p-0">
                        {{-- Novo Comentário --}}
                        <div class="games-div mb-5">
                            <div class="row p-5">
                                <div class="col-lg-4 col-xl-4">
                                    <div class="row">
                                        <div class="col-3 col-sm-2 col-md-1 col-lg-3 col-xl-3 p-0 text-center">
                                            <img width="40px" src="{{ url('img/svg/profile.svg') }}">
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-11 col-lg-9 col-xl-9 p-0">
                                            <label class="user pl-2">OtakuGamer</label>
                                            <label class="vote">Avaliação obrigatória</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-8 col-xl-8 pt-2 pt-sm-2">
                                    <form action="?" method="?">
                                        <div class="row border border-secondary">
                                            <input type="text" name="comment" class="comment-input p-2" placeholder='Comente aqui...' required>
                                            
                                            <input id="like" type="radio" value="like" name="radio" required>
                                            <label class="like-label" for="like" id="avaliation" onclick="alternate()">
                                                <img width="20px" src="{{ url('img/img/white.png') }}">
                                            </label>

                                            <input id="dislike" type="radio" value="dislike" name="radio" required>
                                            <label class="like-label" for="dislike" id="avaliation2" onclick="alternate2()" >
                                                <img class="img-rotate" width="20px" src="{{ url('img/img/white.png') }}">
                                            </label>

                                            <button type="submit" class="btn-send">
                                                <svg width="30px" fill="#FAFAFA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 488.721 488.721" style="enable-background:new 0 0 488.721 488.721;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M483.589,222.024c-5.022-10.369-13.394-18.741-23.762-23.762L73.522,11.331C48.074-0.998,17.451,9.638,5.122,35.086    C-1.159,48.052-1.687,63.065,3.669,76.44l67.174,167.902L3.669,412.261c-10.463,26.341,2.409,56.177,28.75,66.639    c5.956,2.366,12.303,3.595,18.712,3.624c7.754,0,15.408-1.75,22.391-5.12l386.304-186.982    C485.276,278.096,495.915,247.473,483.589,222.024z M58.657,446.633c-8.484,4.107-18.691,0.559-22.798-7.925    c-2.093-4.322-2.267-9.326-0.481-13.784l65.399-163.516h340.668L58.657,446.633z M100.778,227.275L35.379,63.759    c-2.722-6.518-1.032-14.045,4.215-18.773c5.079-4.949,12.748-6.11,19.063-2.884l382.788,185.173H100.778z"/>
                                                    </g>
                                                </g>
                                                </svg>
                                            </button>
                                        </div>

                                        </div>
                                    </form>
                                </div>      
                            </div>
                        </div>

                        {{-- Comentário 1 --}}
                        <div class="games-div mb-3">
                            <div class="row p-5">
                                <div class="col-md-12 col-xl-5">
                                    <div class="row">
                                        <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-2 pb-2">
                                            <img width="40px" src="{{ url('img/svg/profile.svg') }}">
                                        </div>

                                        <div class="col-10 col-sm-10 col-md-11 col-lg-11 col-xl-10 pl-md-3">
                                            <label class="user">Junin matador de porco</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-7 pt-md-3 pt-sm-3">
                                    <div class="like p-3">
                                        <div class="row">
                                            <div class="col-3 col-sm-3 col-md-2 col-lg-1 col-xl-2">
                                                <img src="{{ url('img/img/like.png') }}">
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-10 col-lg-11 col-xl-10">
                                                <h3 class="opinion pt-2">Recomendo</h3>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Data --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pt-3">Postado: 03/01/2021</p>
                                            <hr class="text-light mt-0">
                                        </div>
                                    </div>
                                    
                                    {{-- Comentário --}}
                                    
                                    <div class="row">
                                        <div class="col-10 col-sm-11 col-md-11">
                                            <p>Boy, assim, eu joguei muito, fiz questão até de zerar mas findei dando muito valor não, negocio chato. se fosse pra dar uma nota eu daria é um 4, é isso man.</p>
                                        </div>
                                        <div class="col-2 col-sm-1 col-md-1">
                                            <div class="dropdown">
                                                <button class="bg-none text-center border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg fill="#fafafa" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="42.667" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="192" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="341.333" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>


                        {{-- Comentário 2 --}}
                        <div class="games-div mb-3">
                            <div class="row p-5">
                                <div class="col-md-12 col-xl-5">
                                    <div class="row">
                                        <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-2 pb-2">
                                            <img width="40px" src="{{ url('img/svg/profile.svg') }}">
                                        </div>

                                        <div class="col-10 col-sm-10 col-md-11 col-lg-11 col-xl-10 pl-md-3">
                                            <label class="user">Junin matador de porco</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-7 pt-md-3 pt-sm-3">
                                    <div class="like p-3">
                                        <div class="row">
                                            <div class="col-3 col-sm-3 col-md-2 col-lg-1 col-xl-2">
                                                <img src="{{ url('img/img/dislike.png') }}">
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-10 col-lg-11 col-xl-10">
                                                <h3 class="opinion pt-2">Não Recomendo</h3>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Data --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pt-3">Postado: 03/01/2021</p>
                                            <hr class="text-light mt-0">
                                        </div>
                                    </div>
                                    
                                    {{-- Comentário --}}
                                    
                                    <div class="row">
                                        <div class="col-10 col-sm-11 col-md-11">
                                            <p>Boy, assim, eu joguei muito, fiz questão até de zerar mas findei dando muito valor não, negocio chato. se fosse pra dar uma nota eu daria é um 4, é isso man.</p>
                                        </div>
                                        <div class="col-2 col-sm-1 col-md-1">
                                            <div class="dropdown">
                                                <button class="bg-none text-center border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg fill="#fafafa" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="42.667" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="192" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <circle cx="192" cy="341.333" r="42.667"/>
                                                            </g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection