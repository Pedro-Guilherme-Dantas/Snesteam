@extends('layouts.auth')
@section('title', 'Verificar Conta')

@section('titleFunction', 'VERIFICAR CONTA')
@section('errorAuth')
<x-jet-validation-errors class="font-12 text-danger font-weight-bold" />
@endsection

@section('form')
        <div class="mb-4 text-secondary font-16">
            {{ __('Antes de começar, verifique seu endereço de e-mail clicando no link que acabamos de enviar para você. Caso você não tenha recebido nenhum e-mail, basta solicitar um novo envio clicando no botão abaixo.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium font-16 text-success">
                {{ __('Um novo link de verificação foi enviado para o seu endereço de e-mail.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class="text-center mt-4">    
                    <button type="submit" class="py-4 send-button text-center">
                        REENVIAR
                    </button>
                    <br>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn-back underline text-secondary p-2 text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
            </form>
        </div>
@endsection
