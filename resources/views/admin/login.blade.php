<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zaloguj się do panelu administratora</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
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
                <h1 style="color: #bf9e87;">Zaloguj się do panelu administratora</h1>
                <form method="post" action="{{ route('login.store') }}">
                    @csrf
                    <div class="form-control">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    @error('email')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <label for="password">HASŁO</label>
                        <input type="password" name="password" placeholder="Hasło">
                    </div>
                    @error('password')
                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                    @enderror
                    <div class="form-control">
                        <button>Zaloguj się</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
