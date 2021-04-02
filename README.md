<h1 align='center'>Snesteam</h1>
<p align="center">Plataforma para download de arquivos de jogos.</p>

<p align="center">
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/badge/License-MIT-white.svg" alt="License MIT">
  </a>
</p>

## Objetivo
 Software válido como atividade avaliativa da matéria "Programação para a internet", do curso Técnico integrado em Informática do IFRN.

## Resumo
 O snesteam é um software web para o download de jogos do Super Nintendo. Com uma interface amigável e simples, é possível visualizar o catálogo completo, a visão geral de cada jogo, além de ser possível adicionar comentários avaliativos sobre cada game. Para o acesso, é necessário fazer o cadastro na plataforma. É possível testar o sistema remotamente [clicando aqui](http://snesteam.herokuapp.com/).

## Tecnologias Utilizadas
 * Html/Css
 * Php
 * Laravel-Framework
 * SQL
 * Composer

 ## Instalação
 Realize a instalação do Php e do Composer. Em seguida, execute os seguintes comandos:
 * ``` git clone https://github.com/Pedro-Guilherme-Dantas/Snesteam.git ```
 * ``` composer install ```
 * ``` php artisan key:generate ```
 * Renomeie o .env.example para .env e em seguida configure suas credenciais da base de dados, da Amazon S3 e do serviço de envio de Email:<br>
 <img src='https://user-images.githubusercontent.com/72264674/113461652-cb2d1f00-93f3-11eb-90a0-30d2edfb5e78.png'><br>
 * ``` php artisan migrate ```
