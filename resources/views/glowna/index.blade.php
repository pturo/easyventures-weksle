@extends('layouts.app')

@section('content')
    <div class="glowna">
        <div class="sticky-right-menu">
            <a href="tel:123456789">
                <span>
                    <i class="fa fa-phone"></i>
                </span>
                <div class="sticky-content">Zadzwoń</div>
            </a>
        </div>
        <div class="sticky-right-menu">
            <a href="#glowna_5">
                <span>
                    <i class="fa fa-map"></i>
                </span>
                <div class="sticky-content">Znajdź nas</div>
            </a>
        </div>
        <section id="o-firmie">
            <div class="row">
                <div class="o-nas padding-15">
                    <div class="card-wrapper">
                        <div class="intro-card">
                            <h1>Kim jesteśmy?</h1>
                            <br>
                            <p>
                                Nasza firma specjalizuje się w handlu papierami wartościowymi, konkretnie wekslami.
                                Świadczymy usługi finansowe, które polegają na finansowaniu naszych klientów poprzez możliwość
                                sprzedaży przez nich podpisanego weksla w zamian za gotówkę. Klient otrzymuje natychmiastowe środki
                                finansowe i podpisuje umowę wekslową, zawierającą informacje dotyczące pierwszego nabywcy weksla
                                i inne istotne postanowienia. Choć nasza forma finansowania nie jest tradycyjnym pożyczkowaniem,
                                kredytem ani chwilówką, zasada działania jest identyczna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="kalkulator-wekslowy">
            <div class="row">
                <div class="kalkulator padding-15">
                    <h1>Kalkulator</h1>
                    <br>
                    <div class="kalkulator-form">
                        <div class="form-wrapper">
                            <div class="left-form">
                                <h3>Dobierz parametry weksla</h3>
                                <div class="sliders">
                                    <label for="credit-val">Kwota weksla</label><br>
                                    <input id="credit-val" name="credit-val" type="range" min="500"
                                        max="2000" value="0">
                                    <br>
                                    <label for="rate-val">Okres spłaty</label><br>
                                    <input id="rate-val" name="rate-val" type="range" min="1" max="36"
                                        value="0">
                                </div>
                                <br>
                                <div class="values">
                                    <div id="credits-input" class="form-input">
                                        <label for="credit-text">Kwota weksla</label>
                                        <div class="custom-input">
                                            <div><input id="credit-text" name="credit-text" type="text"
                                                    value="0"> pln
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="rate-input" class="form-input">
                                        <label for="rate-text">Okres spłaty</label>
                                        <div class="custom-input">
                                            <div><input id="rate-text" name="rate-text" type="text" value="0">
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
                        <form action="{{ route('zloz-zapytanie.store') }}" method="POST">
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
                                            <label class="home-number" for="home-number">Nr
                                                domu/mieszkania</label>&nbsp;&nbsp;
                                            <input id="home-number" type="text" name="home-number"
                                                placeholder="Wprowadź dane"
                                                class="@error('home-number') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div id="credits-input-wrapper" class="form-control">
                                        <label for="credits">Kwota weksla</label>
                                        <div id="credits-input" class="custom-input">
                                            <div><input id="credits" name="rate-text" type="text" value="0"
                                                    disabled> pln
                                            </div>
                                        </div>
                                    </div>
                                    <div id="rate-input-wrapper" class="form-control">
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

                        // get values from slider
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

                        // get values to slider
                        creditVal.value = creditText.value;
                        rateVal.value = rateText.value;
                        creditVal.value = credit.value;
                        rateVal.value = rate.value;

                        creditText.oninput = function() {
                            creditVal.value = this.value;
                            credit.value = this.value;
                        }

                        rateText.oninput = function() {
                            rateVal.value = this.value;
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
        </section>
        <section id="nasze-atuty">
            <div class="row">
                <div class="zalety padding-15">
                    <h1>Dlaczego warto nas wybrać?</h1>
                    <br>
                    <div class="card-grid">
                        <div class="card-grid-item">
                            <div class="icon-header">
                                <i class="fa fa-search"></i>
                                <h2>Brak ukrytych druczków</h2>
                            </div>
                            <p>
                                Stawiamy przede wszystkim na prostotę i tak też jest w przypadku
                                zawierania umów wekslowych.
                                Nasze zasady są jasne i przejrzyste dla klientów.
                            </p>
                        </div>
                        <div class="card-grid-item">
                            <div class="icon-header">
                                <i class="fa fa-line-chart"></i>
                                <h2>Bogate doświadczenie</h2>
                            </div>
                            <p>
                                Doświadczenie to nasz główny atut. W naszej firmie pracuje szereg
                                wykwalifikowanych pracowników,
                                którzy zawsze służą swoją wiedzą i pomocą podczas zawierania umów
                                wekslowych.
                            </p>
                        </div>
                        <div class="card-grid-item">
                            <div class="icon-header">
                                <i class="fa fa-thumbs-up"></i>
                                <h2>Współpraca</h2>
                            </div>
                            <p>
                                Prowadzimy współpracę z przedstawicielami naszej branży z całej Polski,
                                posiadającymi własne bazy klientów,
                                którym można udzielić finansowania i przy okazji polecić nasze usługi.
                            </p>
                        </div>
                        <div class="card-grid-item">
                            <div class="icon-header">
                                <i class="fa fa-ticket"></i>
                                <h2>Niezawodne wsparcie</h2>
                            </div>
                            <p>
                                Czasami może się zdarzyć sytuacja, w których potrzebna będzie pomoc i od
                                tego właśnie jesteśmy. Chętnie
                                pomożemy rozwiązać trudności związane ze spłatą należności.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="splaty-weksli">
            <div class="row">
                <div class="jak-splacic-weksel padding-15">
                    <div class="jak-splacic-wrapper">
                        <div class="splata-left">
                            <h2>Jak złożyć wniosek o weksel?</h2>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">1</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>Złóż wniosek o weksel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">2</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>Poczekaj na zatwierdzenie</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">3</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-usd"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>Otrzymaj pieniądze</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="center">
                                    <a href="">
                                        <button>Dowiedz się więcej</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="splata-right">
                            <h2>Jak spłacić należność?</h2>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">1</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-building"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>W naszej siedzibie</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">2</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-exchange"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>Przelewem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="jak-splacic-items">
                                    <div class="splata-col-2">
                                        <div class="step-num">3</div>
                                    </div>
                                    <div class="splata-col-10">
                                        <div class="jak-splacic-items">
                                            <div class="splata-col-3">
                                                <i class="fa fa-bank"></i>
                                            </div>
                                            <div class="splata-col-9">
                                                <p>U Doradcy Kredytowego</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div class="center">
                                    <a href="">
                                        <button>Dowiedz się więcej</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="wspolpraca">
            <div class="row">
                <div class="kooperacja padding-15">
                    <h1>Współpraca</h1>
                    <br>
                    <div class="wspolpraca-card">
                        <div class="background"></div>
                        <div class="content">
                            <p>
                                Cieszymy się, że możemy współpracować z naszymi agentami. Jesteśmy przekonani,
                                że nasza działalność finansowa przyniesie znaczące korzyści Państwa klientom.
                                Nasza firma oferuje szybkie i skuteczne rozwiązania finansowe oparte na sprzedaży weksli.
                                Dzięki naszemu wsparciu, agenci będą mieli możliwość skorzystania z natychmiastowej gotówki,
                                co przyczyni się do zwiększenia ich elastyczności finansowej. Jesteśmy otwarci na
                                długoterminową współpracę i zapewniamy profesjonalne podejście w obsłudze klienta.
                                Razem możemy osiągnąć sukces i przyczynić się do wzrostu biznesu agentów z całej Polski.
                            </p>
                            <div class="center">
                                <a href="">
                                    <button>Dowiedz się więcej</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="znajdz-nas">
            <div class="znajdz-nas-mapa">
                <div class="row">
                    <div class="g-map">
                        <h1>Znajdź nas tutaj</h1>
                        <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d152.14931891664833!2d16.9054767039234!3d52.3996239048731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47045b2d3dd055cb%3A0x99a5d242f3a409e8!2sG%C5%82ogowska%2031-33%2C%2060-702%20Pozna%C5%84!5e0!3m2!1spl!2spl!4v1687514877498!5m2!1spl!2spl"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
