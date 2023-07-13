<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Paweł 'WilczeqVlk' Turoń">
    <title>Na Weksel - Panel administracyjny</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
</head>

<body class="dark-blue-theme">
    <div id="app">
        <div class="container">
            <div class="header">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{ route('dashboard.index') }}">
                            <img src="{{ asset('img/easyventure-logo-admin.png') }}" alt="easyventures-logo-admin"
                                width="150" height="60">
                        </a>
                    </div>
                    <div class="header-tools">
                        <div class="user-profile">
                            @if (Auth::check())
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                <form action="{{ route('login.logout') }}" method="post">
                                    @csrf
                                    <button type="submit">Wyloguj się</button>
                                </form>
                            @endif
                        </div>
                        <div class="theme-switcher">
                            <span id="current-theme">Aktualny motyw: Dark Blue</span>&nbsp;
                            <label class="switch">
                                <input type="checkbox" id="themeSwitcher">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="side-nav">
                    <div class="side-nav-wrapper">
                        <div class="side-nav-heading">
                            <h5>Nawigacja</h5>
                            <hr color="white">
                        </div>
                        <div class="side-list">
                            <div class="side-list-item{{ request()->is('dashboard.index') ? ' active' : '' }}">
                                <a href="{{ route('dashboard.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Panel główny</div>
                                </a>
                            </div>
                            <div class="side-list-item{{ request()->is('o-nas.index') ? ' active' : '' }}">
                                <a href="{{ route('o-nas.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Sekcja O nas</div>
                                </a>
                            </div>
                            <div class="side-list-item{{ request()->is('nasze-atuty.index') ? ' active' : '' }}">
                                <a href="{{ route('nasze-atuty.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Sekcja Nasze atuty</div>
                                </a>
                            </div>
                            <div class="side-list-item{{ request()->is('wspolpraca.index') ? ' active' : '' }}">
                                <a href="{{ route('wspolpraca.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Sekcja Współpraca</div>
                                </a>
                            </div>
                            <div class="side-list-item{{ request()->is('kontakt.index') ? ' active' : '' }}">
                                <a href="{{ route('kontakt.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Sekcja Kontakt</div>
                                </a>
                            </div>
                            <div class="side-list-item{{ request()->is('lista-icon.index') ? ' active' : '' }}">
                                <a href="{{ route('lista-icon.index') }}">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">Lista ikon</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fillable-content">
                    <div class="content-container">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="footer">
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let themeVal = localStorage.getItem('admin-theme');
        let theme = JSON.parse(themeVal);

        // Theme switcher
        var getCurrentTheme = document.body;

        var getSwitcher = document.getElementById('themeSwitcher');
        var getName = document.getElementById('current-theme');

        getSwitcher.addEventListener('change', function() {
            if (getSwitcher.checked) {
                getName.textContent = "Aktualny motyw: Light Coffee";
                getCurrentTheme.classList.remove('dark-blue-theme');
                getCurrentTheme.classList.add('light-coffee-theme');
                localStorage.setItem('admin-theme', JSON.stringify(getCurrentTheme.classList.value));
            } else {
                getName.textContent = "Aktualny motyw: Dark Blue";
                getCurrentTheme.classList.remove('light-coffee-theme');
                getCurrentTheme.classList.add('dark-blue-theme');
                localStorage.setItem('admin-theme', JSON.stringify(getCurrentTheme.classList.value));
            }
        });

        // Restore theme on page load
        if (theme) {
            getCurrentTheme.classList = theme;
            if (theme.includes('light-coffee-theme')) {
                getSwitcher.checked = true;
                getName.textContent = "Aktualny motyw: Light Coffee";
            } else {
                getSwitcher.checked = false;
                getName.textContent = "Aktualny motyw: Dark Blue";
            }
        }
    });


    // Switching side nav item link active
    // Get all the side-list-item elements
    const navItems = document.querySelectorAll('.side-list-item');

    // Set the first item as active by default
    navItems[0].classList.add('active');

    // Add click event listener to each nav item
    navItems.forEach((item) => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            navItems.forEach((navItem) => {
                navItem.classList.remove('active');
            });

            // Add active class to the clicked item
            this.classList.add('active');
        });
    });
</script>

</html>
