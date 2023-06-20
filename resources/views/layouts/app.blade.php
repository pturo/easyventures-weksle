<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easyventures - Strona główna</title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="container">
                <div class="row" id="header_1">
                    <div class="col-width-30">
                        <div class="logo">
                            <a href="/">EASY VENTURES WEKSLE</a>
                        </div>
                    </div>
                    <div class="col-width-70">
                        <div class="nav-wrapper">
                            <nav>
                                <ul class="nav-menu">
                                    <li><a href="">WARUNKI FINANSOWANIA</a></li>
                                    <li><a href="">KONTAKT</a></li>
                                    <li><a href="">WSPÓŁPRACA</a></li>
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
        </header>

        <main class="page">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-width-70">
                        <div class="links">Linki</div>
                    </div>
                    <div class="col-width-30">
                        <div class="contact">
                            <h5>Skontaktuj się z nami</h5>
                            <div class="footer-phone">
                                <i class="fa fa-phone"></i>
                                <a href="tel:123456789">123456789</a>
                            </div>
                            <p>Głogowska 31/33, 60-702 Poznań, Polska</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
