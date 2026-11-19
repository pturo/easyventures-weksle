@extends('admin.layout.auth-layout')
@section('title', 'Zaloguj się do panelu')
@section('content')
<div class="login-wrapper">
        <div class="background-theme"></div>
        <div class="login-form">
            @if (Session::has('message'))
                <div class="invalid-feedback" role="alert">{{ Session::get('message') }}</div>
            @endif
            <div class="form-content">
                <div class="logo">
                    <img src="{{ asset('img/easyventure-logo-rb.png') }}" alt="easyventures-logo" height="175px">
                </div>
                <h1 style="color: #bf9e87;">Zaloguj się</h1>
                <form method="post" action="{{ route('login.store') }}">
                    @csrf
                    <div class="form-control">
                        <label for="email">E-MAIL</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" autocomplete="email" required>
                    </div>
                    @error('email')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <label for="password">HASŁO</label>
                        <input type="password" id="password" name="password" placeholder="Hasło" autocomplete="current-password" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <button>Zaloguj się</button>
                    </div>
                    <div class="form-control">
                        <span>Nie masz konta? </span>
                        <a href="/admin/register">Załóż tutaj</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
