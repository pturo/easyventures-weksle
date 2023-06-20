@extends('layouts.app')

@section('content')
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map"></i>
            </span>
            <div class="content">Znajdź nas</div>
        </a>
    </div>
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map-marker"></i>
            </span>
            <div class="content">Znajdź nas</div>
        </a>
    </div>
    <div class="sticky-right-menu">
        <a href="">
            <span>
                <i class="fa fa-map-marker"></i>
            </span>
            <div class="content">Znajdź nas</div>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-width-100">
                <div class="o-nas">
                    <h1>Kim jesteśmy?</h1>
                    <hr class="dark-blue">
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
        </div>
        <div class="row">
            <div class="col-width-100">
                <div class="zalety">
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
        </div>
        <div class="row">
            <div class="col-width-100">
                <div class="kalkulator">
                    <h1>Kalkulator</h1>
                    <hr class="dark-blue">
                    <br>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                        </ul>
                    @endif
                    <form class="kalkulator-form" action="{{ route('glowna.store') }}" method="POST">
                        @csrf
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
                                        <label for="custom-input">Kwota weksla</label>
                                        <div class="custom-input">
                                            <div><input id="credit-text" name="credit-text" type="text" value="0"
                                                    disabled> pln
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-input">
                                        <label for="custom-input">Okres spłaty</label>
                                        <div class="custom-input">
                                            <div><input id="rate-text" name="rate-text" type="text" value="0"
                                                    disabled> mc
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-button"><button type="submit">Złóż zapytanie</button></div>
                            </div>
                            <div class="right-form">
                                <h1>Potrzebujesz gotówki? Nie ma sprawy!</h1>
                                <p>Wystarczy złożyć zapytanie o finansowanie, wypełniając formularz i gotowe!</p>
                                <img src="{{ asset('img/money.png') }}" alt="Image by pch.vector on Freepik">
                            </div>
                        </div>
                        <script>
                            var creditVal = document.getElementById('credit-val');
                            var rateVal = document.getElementById('rate-val');
                            var creditText = document.getElementById('credit-text');
                            var rateText = document.getElementById('rate-text');

                            creditText.value = creditVal.value;
                            rateText.value = rateVal.value;

                            creditVal.oninput = function() {
                                creditText.value = this.value;
                            }

                            rateVal.oninput = function() {
                                rateText.value = this.value;
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
