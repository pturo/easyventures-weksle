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
            <div class="form-content">
                <div class="logo">
                    <img src="{{ asset('img/easyventure-logo-rb.png') }}" alt="easyventures-logo" height="175px">
                </div>
                <h1 style="color: #bf9e87;">Zaloguj się do panelu administratora</h1>
                <form action="">
                    @csrf
                    <div class="form-control">
                        <label for="login">LOGIN</label>
                        <input type="text" name="login" placeholder="Login">
                    </div>
                    <div class="form-control">
                        <label for="password">HASŁO</label>
                        <input type="password" name="password" placeholder="Hasło">
                    </div>
                    <div class="form-control">
                        <button>Zaloguj się</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
