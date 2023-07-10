<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Na Weksel - Strona główna</title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <!-- load jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!-- Load slick CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
      integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Load slick theme CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="container">
                <div class="row" id="header_1">
                    <div class="padding-15">
                        <div class="nav-items-wrapper">
                            <div class="logo">
                                <a href="{{ route('index.index') }}">
                                    <img src="{{ asset('img/easyventure-logo-rb.png') }}" alt="naweksel-logo" width="150" height="90">
                                </a>
                            </div>
                            <div class="nav-wrapper">
                                <nav>
                                    <ul class="nav-menu">
                                        <li><a href="#splaty-weksli">WARUNKI FINANSOWANIA</a></li>
                                        <li><a href="#wspolpraca">WSPÓŁPRACA</a></li>
                                        <li><a href="#kontakt">KONTAKT</a></li>
                                        <li>
                                            <div class="nav-phone">
                                                <i class="fa fa-phone"></i>
                                                <a href="tel:123456789">123456789</a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="page">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-menu">
                        <div class="linki padding-15">
                            <div class="links">
                                <h5>Linki</h5>
                                <div class="page-links">
                                    <a href="#">Warunki finansowania</a>
                                    <a href="#">Współpraca</a>
                                </div>
                            </div>
                        </div>
                        <div class="logo-footer">
                            <img src="{{ asset('img/easyventure-logo-rb.png') }}" alt="naweksel-logo" height="100">
                        </div>
                        <div class="kontakt padding-15">
                            <div class="contact">
                                <h5>Skontaktuj się z nami</h5>
                                <br>
                                <strong><h2 style="color: white;">EASY VENTURES SP. Z O. O.</h2></strong>
                                <p>ul. Głogowska 31/33, 60-702 Poznań, Polska</p>
                                <p>NIP: 5242893955</p>
                                <div class="footer-phone">
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:123456789">123456789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="designed-by padding-15">
                        <div class="sdf">
                            <span>Realizacja: <a href="https://www.digitalowa.pl/">Agencja Digitalowa</a></span>
                        </div>
                        <div class="privacy-policy">
                            <a href="">Polityka prywatności</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- load Slick -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
</body>
</html>
