@extends('layouts.auth')

@section('title', 'Redefinir Senha')
@section('titleFunction', 'REDEFINIR SENHA')

@section('errorAuth')
<x-jet-validation-errors class="font-12 text-danger font-weight-bold" />
@endsection

@section('form')
<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="block">
        <x-jet-input id="email" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="E-mail" type="email" name="email" :value="old('email', $request->email)" required autofocus />
    </div>

    <div class="mt-2">
        <x-jet-input id="password" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="Senha" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-2">
        <x-jet-input id="password_confirmation" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="Confirmar senha" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="text-center mt-4">    
        <button type="submit" class="p-4 send-button">
            <svg class="invert-content" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <br>
    </div>
</form>

<a class="btn-back underline text-secondary p-2 text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
</a>
@endsection