@extends('admin.layout.admin-layout')

@section('content')
    <div class="dashboard-title">
        @if (Auth::check())
            <h2>Witaj, {{ Auth::user()->name }} w panelu administracyjnym!</h2>
        @endif
    </div>
    <div class="dashboard-subtitle">
        <h4>
            Za pomocą tego prostego systemu CMS możesz dodawać, edytować, usuwać
            treści na swojej stronie.
        </h4>
    </div>
    <div class="dashboard-wrapper">
        <div class="wrapper-heading">
            <h2>Na skróty</h2>
        </div>
        <div class="shortcut-grid">
            <div class="grid-item">
                <a href="{{ route('o-nas.index') }}">
                    <div class="grid-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="grid-text">Sekcja O Nas</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ route('nasze-atuty.index') }}">
                    <div class="grid-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="grid-text">Sekcja Nasze atuty</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ route('wspolpraca.index') }}">
                    <div class="grid-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="grid-text">Sekcja Współpraca</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="{{ route('kontakt.index') }}">
                    <div class="grid-icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="grid-text">Sekcja Kontakt</div>
                </a>
            </div>
        </div>
    </div>

@endsection
