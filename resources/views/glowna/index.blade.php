@extends('layouts.app')

@section('content')
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map"></i>
            </span>
            <div class="sticky-content">Znajdź nas</div>
        </a>
    </div>
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map-marker"></i>
            </span>
            <div class="sticky-content">Znajdź nas</div>
        </a>
    </div>
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map-marker"></i>
            </span>
            <div class="sticky-content">Znajdź nas</div>
        </a>
    </div>
    <div class="glowna container">
        <div class="container">
            <div class="row">
                <div class="o-nas padding-15">
                    <h1>Kim jesteśmy?</h1>
                    <hr class="dark-blue">
                    <br>
                    <p>
                        Jesteśmy firmą, która zajmuje się obrotem papieru wartościowego jakim jest weksel.
                        Jest to działalność finansowa, która finansuje naszych klientów na zasadzie sprzedaży przez
                        klienta swojego podpisanego weksla,
                        klient otrzymuję do rąk gotówkę i podpisuje porozumienie wekslowe (umowa) w której ma
                        informacje o pierwokupie
                        weksla itp (mogę podesłać wzory) Jest to forma finansowania (nie używamy słów pożyczka,
                        kredyt, chwilówka) ale zasada
                        jest identyczna.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="zalety padding-15">
                    <h1>Dlaczego warto nas wybrać?</h1>
                    <hr class="dark-blue">
                    <table class="oferta">
                        <tbody>
                            <tr>
                                <td class="first">
                                    <i class="fa fa-map"></i>
                                    <h2>Brak ukrytych druczków</h2>
                                    <p>
                                        Stawiamy przede wszystkim na prostotę i tak też jest w przypadku
                                        zawierania umów wekslowych.
                                        Nasze zasady są jasne i przejrzyste dla klientów.
                                    </p>
                                </td>
                                <td>
                                    <i class="fa fa-map"></i>
                                    <h2>Bogate doświadczenie</h2>
                                    <p>
                                        Doświadczenie to nasz główny atut. W naszej firmie pracuje szereg
                                        wykwalifikowanych pracowników,
                                        którzy zawsze służą swoją wiedzą i pomocą podczas zawierania umów
                                        wekslowych.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-map"></i>
                                    <h2>Współpraca</h2>
                                    <p>
                                        Prowadzimy współpracę z przedstawicielami naszej branży z całej Polski,
                                        posiadającymi własne bazy klientów,
                                        którym można udzielić finansowania i przy okazji polecić nasze usługi.
                                    </p>
                                </td>
                                <td class="last">
                                    <i class="fa fa-map"></i>
                                    <h2>Niezawodne wsparcie</h2>
                                    <p>
                                        Czasami może się zdarzyć sytuacja, w których potrzebna będzie pomoc i od
                                        tego właśnie jesteśmy. Chętnie
                                        pomożemy rozwiązać trudności związane ze spłatą należności.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="kalkulator padding-15">
                    <h1>Kalkulator</h1>
                    <hr class="dark-blue">
                    <br>
                    <div class="kalkulator-form">
                        <div class="form-wrapper">
                            <div class="left-form">
                                <h3>Dobierz parametry weksla</h3>
                                <div class="sliders">
                                    <label for="credit-val">Kwota weksla</label><br>
                                    <input id="credit-val" name="credit-val" type="range" min="500" max="2000"
                                        value="0">
                                    <br>
                                    <label for="rate-val">Okres spłaty</label><br>
                                    <input id="rate-val" name="rate-val" type="range" min="1" max="36"
                                        value="0">
                                </div>
                                <br>
                                <div class="values">
                                    <div class="form-input">
                                        <label for="credit-text">Kwota weksla</label>
                                        <div class="custom-input">
                                            <div><input id="credit-text" name="credit-text" type="text" value="0"
                                                    disabled> pln
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-input">
                                        <label for="rate-text">Okres spłaty</label>
                                        <div class="custom-input">
                                            <div><input id="rate-text" name="rate-text" type="text" value="0"
                                                    disabled>
                                                mc
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-button">
                                    <button id='buttonShowHide'>Złóż zapytanie</button>
                                </div>
                            </div>
                            <div class="right-form">
                                <h1>Potrzebujesz gotówki? Nie ma sprawy!</h1>
                                <p>Wystarczy złożyć zapytanie o finansowanie, wypełniając formularz i gotowe!</p>
                                <img src="{{ asset('img/money.png') }}" alt="Image by pch.vector on Freepik">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="show-hide" style="display: none;">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="error">
                                        <p>{{ $error }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('glowna.store') }}" method="POST">
                            @csrf
                            <div class="form-wrapper">
                                <div class="wide-form">
                                    <h3>Prosimy uzupełnić wszystkie pola</h3>
                                    <br>
                                    <div class="form-control">
                                        <label for="name">Imię</label>
                                        <input id="name" type="text" name="name" placeholder="Wprowadź dane"
                                            class="@error('name') is-invalid @enderror">
                                    </div>
                                    <div class="form-control">
                                        <label for="surname">Nazwisko</label>
                                        <input id="surname" type="text" name="surname" placeholder="Wprowadź dane"
                                            class="@error('surname') is-invalid @enderror">
                                    </div>
                                    <div class="form-control">
                                        <label for="email">Adres e-mail</label>
                                        <input id="email" type="email" name="email" placeholder="Wprowadź dane"
                                            class="@error('email') is-invalid @enderror">
                                    </div>
                                    <div id="city-zip">
                                        <div id="city-inner" class="form-control">
                                            <label class="city" for="city">Miejscowość</label>&nbsp;&nbsp;
                                            <input id="city" type="text" name="city"
                                                placeholder="Wprowadź dane" class="@error('city') is-invalid @enderror">
                                        </div>
                                        <div id="zip-inner" class="form-control">
                                            <label class="zip-code" for="zip-code">Kod pocztowy</label>&nbsp;&nbsp;
                                            <input id="zip-code" type="text" pattern="[0-9]{2}[-][0-9]{3}"
                                                name="zip-code" placeholder="Wprowadź dane"
                                                class="@error('zip-code') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div id="street-home">
                                        <div id="street-inner" class="form-control">
                                            <label class="street" for="street">Ulica</label>&nbsp;&nbsp;
                                            <input id="street" type="text" name="street"
                                                placeholder="Wprowadź dane" class="@error('street') is-invalid @enderror">
                                        </div>
                                        <div id="home-inner" class="form-control">
                                            <label class="home-number" for="home-number">Nr domu/mieszkania</label>&nbsp;&nbsp;
                                            <input id="home-number" type="text" name="home-number"
                                                placeholder="Wprowadź dane"
                                                class="@error('home-number') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label for="credits">Kwota weksla</label>
                                        <div id="credits-input" class="custom-input">
                                            <div><input id="credits" name="rate-text" type="text" value="0"
                                                    disabled> pln
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label for="rate">Okres spłaty</label>
                                        <div id="rate-input" class="custom-input">
                                            <div><input id="rate" name="rate-text" type="text" value="0"
                                                    disabled> mc
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-button">
                                        <button type="submit">Wyślij</button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        var creditVal = document.getElementById('credit-val');
                        var rateVal = document.getElementById('rate-val');
                        var creditText = document.getElementById('credit-text');
                        var rateText = document.getElementById('rate-text');
                        var credit = document.getElementById('credits');
                        var rate = document.getElementById('rate');

                        var buttonShowHide = document.getElementById('buttonShowHide');
                        var showHideForm = document.getElementById('show-hide');

                        var zipCode = document.getElementById('zip-code');

                        creditText.value = creditVal.value;
                        rateText.value = rateVal.value;
                        credit.value = creditVal.value;
                        rate.value = rateVal.value;

                        creditVal.oninput = function() {
                            creditText.value = this.value;
                            credit.value = this.value;
                        }

                        rateVal.oninput = function() {
                            rateText.value = this.value;
                            rate.value = this.value;
                        }

                        buttonShowHide.onclick = function() {
                            if (showHideForm.style.display == "none") {
                                showHideForm.style.display = "block";
                            }
                        }

                        zipCode.onkeyup = function(e) {
                            var code = this.value;
                            var key = event.keyCode || event.charCode;

                            if (this.value.length == 2) {
                                if (key == 8 || key == 46) {} else {
                                    this.value = (code + '-');
                                }
                            }
                            if (this.value.indexOf('--') !== -1) {
                                this.value = code.replace('--', '-');
                            }
                        };
                    </script>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection
