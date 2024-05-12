@extends('layouts.auth')
@section('title', 'Recover password')
@section('content')
<x-forms.auth-forms title="Recover password" action="">
    <x-forms.text-input name="email" :isError="true" type="email" placeholder="E-mail" method="POST"></x-forms.text-input>
    @error('email')
    <x-forms.error>
        {{ $message }}
    </x-forms.error>
    @enderror
    <input name="password" type="password" class="w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="Пароль" required>
    @error('password')
    <x-forms.error>
        {{ $message }}
    </x-forms.error>
    @enderror
    <input name="password_confirmation  " type="password" class="w-full h-14 px-4 rounded-lg border border-[#A07BF0] bg-white/20 focus:border-pink focus:shadow-[0_0_0_2px_#EC4176] outline-none transition text-white placeholder:text-white text-xxs md:text-xs font-semibold" placeholder="Пароль ewe" required>
    @error('password_confirmation')
    <x-forms.error>
        {{ $message }}
    </x-forms.error>
    @enderror
    <x-forms.primary-button>Reset password</x-forms.primary-button>
    <x-slot:buttons>
        <div class="space-y-3 mt-5">
            <div class="text-xxs md:text-xs"><a href="{{route('login')}}" class="text-white hover:text-white/70 font-bold">Reset Password</a></div>
        </div>
    </x-slot:buttons>
</x-forms.auth-forms>
@endsection
