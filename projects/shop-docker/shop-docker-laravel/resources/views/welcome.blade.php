@extends('layouts.auth')
@section('content')
    <form method="post" action="{{route('logout')}}">
        @csrf
        @method('DELETE')
        <button></button>
    </form>
@endsection
