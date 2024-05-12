@extends('layouts.auth')
@section('title', 'Забыли пароль')
@section('content')
<x-forms.auth-forms title="Забыли пароль" action="">
    <x-forms.text-input name="email" :isError="true" type="email" placeholder="E-mail" method="POST"></x-forms.text-input>
    @error('email')
    <x-forms.error>
        {{ $message }}
    </x-forms.error>
    @enderror
    <x-forms.primary-button>Send</x-forms.primary-button>
    <x-slot:buttons>
        <div class="space-y-3 mt-5">
            <div class="text-xxs md:text-xs"><a href="{{route('login')}}" class="text-white hover:text-white/70 font-bold">Вспомнил пароль</a></div>
        </div>
    </x-slot:buttons>
</x-forms.auth-forms>
@endsection
