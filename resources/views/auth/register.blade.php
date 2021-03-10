@extends('layouts.auth')

@section('title', 'Register')
@section('titleFunction', 'REGISTRE-SE')

@section('errorAuth')
    <x-jet-validation-errors class="font-12 text-danger font-weight-bold" />
@endsection

@section('form')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
        <x-jet-input id="name" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="Nome" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-2">
        {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
        <x-jet-input id="email" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="E-mail" type="email" name="email" :value="old('email')" required />
    </div>

    <div class="mt-2">
        {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
        <x-jet-input id="password" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="Senha" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-2">
        {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
        <x-jet-input id="password_confirmation" class="block mt-1 w-full data-input text-secondary font-14 px-2" placeholder="Confirmar senha" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-2">
            <x-jet-label for="terms">
                <div class="flex items-center">
                    <x-jet-checkbox name="terms" id="terms"/>

                    <div class="ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-jet-label>
        </div>
    @endif

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