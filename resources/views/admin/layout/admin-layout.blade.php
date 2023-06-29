<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <img src="{{ asset('img/easyventure-logo-admin.png') }}" alt="easyventures-logo-admin"
                            width="150" height="60">
                    </div>
                    <div class="header-tools">
                        <div class="user-profile">USER_PROFILE</div>
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
                            <div class="side-list-item" class="active">
                                <a href="">
                                    <div class="list-item-icon">
                                        <i class="fa fa-marker"></i>
                                    </div>
                                    <div class="list-item-text">NAWIGACJA 1</div>
                                </a>
                            </div>
                            <div class="side-list-item">
                                <a href="">
                                    <div class="list-item-icon">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="list-item-text">NAWIGACJA 2</div>
                                </a>
                            </div>
                            <div class="side-list-item">
                                <a href="">
                                    <div class="list-item-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="list-item-text">NAWIGACJA 3</div>
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
    var getCurrentTheme = document.body;

    var getSwitcher = document.getElementById('themeSwitcher');
    var getName = document.getElementById('current-theme');

    getSwitcher.addEventListener('change', function() {
        if (getSwitcher.checked) {
            getName.textContent = "Aktualny motyw: Light Coffee";
            getCurrentTheme.classList.remove('dark-blue-theme');
            getCurrentTheme.classList.add('light-coffee-theme');
        } else {
            getName.textContent = "Aktualny motyw: Dark Blue";
            getCurrentTheme.classList.remove('light-coffee-theme');
            getCurrentTheme.classList.add('dark-blue-theme');
        }
    });
</script>

</html>
