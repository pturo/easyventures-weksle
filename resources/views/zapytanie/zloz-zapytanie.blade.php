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
                <div class="zapytanie">
                    <h1>Składanie zapytania</h1>
                    <hr class="dark-blue">
                    <br>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p class="error">{{ $error }}</p>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('zapytanie.store') }}" method="POST">
                        @csrf
                        <div class="form-wrapper">
                            <div class="wide-form">
                                <h3>Prosimy uzupełnić wszystkie pola</h3>
                                <br>
                                <div class="form-control">
                                    <label for="name">Imię</label>
                                    <input type="text" name="name" placeholder="Wprowadź dane" class="@error('name') is-invalid @enderror">
                                </div>
                                <div class="form-control">
                                    <label for="surname">Nazwisko</label>
                                    <input type="text" name="surname" placeholder="Wprowadź dane" class="@error('name') is-invalid @enderror">
                                </div>
                                <div class="form-control">
                                    <label for="email">Adres e-mail</label>
                                    <input type="email" name="email" placeholder="Wprowadź dane" class="@error('name') is-invalid @enderror">
                                </div>
                                <div class="form-control">
                                    <label for="city">Miejscowość</label>
                                    <input type="text" name="city" placeholder="Wprowadź dane" class="@error('name') is-invalid @enderror">
                                </div>
                                @forelse ($formData as $key => $value)
                                    @if ($key === 'creditVal')
                                        <div class="form-control">
                                            <label for="credits">Kwota weksla</label>
                                            <input type="text" name="credits" value="{{ $value }} zł" disabled>
                                        </div>
                                    @elseif ($key === 'rateVal')
                                        <div class="form-control">
                                            <label for="rate">Okres spłaty</label>
                                            <input type="text" name="rate" value="{{ $value }} mc" disabled>
                                        </div>
                                    @endif
                                @empty
                                    <p class="error">Nie udało się pobrać danych!</p>
                                @endforelse
                                <br>
                                <div class="form-button">
                                    <button type="submit">Wyślij</button>&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>
                    <a href="/"><button>Wróć</button></a>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
