@extends('admin.layout.auth-layout')
@section('title', 'Utwórz konto')
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
                <h1 style="color: #bf9e87;">Utwórz konto</h1>
                <form class="register-form" method="post" action="{{ route('register.create') }}">
                    @csrf
                    <div class="form-control">
                        <label for="name">NAZWA UŻYTKOWNIKA</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nazwa użytkownika" autocomplete="name" required>
                    </div>
                    @error('name')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <label for="email">E-MAIL</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" autocomplete="email" required>
                    </div>
                    @error('email')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <label for="password">HASŁO</label>
                        <input type="password" id="password" name="password" placeholder="Hasło" autocomplete="new-password" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <label for="password_confirmation">POWTÓRZ HASŁO</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Powtórz hasło" autocomplete="new-password" required>
                    </div>
                    @error('password_confirmation')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <button>Utwórz konto</button>
                    </div>
                </form>
                <div class="form-control">
                    <span>Masz już konto? </span>
                    <a href="/admin/login">Powrót do logowania</a>
                </div>
            </div>
        </div>
    </div>
@endsection
