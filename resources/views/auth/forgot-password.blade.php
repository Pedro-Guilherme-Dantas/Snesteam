@extends('layouts.auth')

@section('title', 'Recuperar Senha')

@section('titleFunction', 'ESQUECEU SUA SENHA?')
@section('errorAuth')
<x-jet-validation-errors class="font-12 text-danger font-weight-bold" />
@endsection

@section('form')
        <p class="text-secondary font-16">{{ __('Sem problemas, insira seu e-mail abaixo e enviaremos um link para fazer a alteração.') }}</p>
    
    @if (session('status'))
        <div class="mb-4 font-medium font-16 text-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="block">
            {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
            <x-jet-input id="email" class="block mt-1 w-full data-input p-2 text-secondary" placeholder="E-mail" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class="text-center mt-4">    
                <button type="submit" class="p-4 send-button">
                    <svg class="invert-content" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <br>
            </div>
        </div>
    </form>
    <a class="btn-back underline text-secondary p-2 text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
    </a>
@endsection