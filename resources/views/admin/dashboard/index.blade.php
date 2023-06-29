@extends('admin.layout.admin-layout')

@section('content')
    <div class="dashboard-title">
        <h2>Witaj, (username) w panelu administracyjnym!</h2>
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
                <a href="#">
                    <div class="grid-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="grid-text">Text</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="grid-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="grid-text">Text</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="grid-icon">
                        <i class="fa fa-map"></i>
                    </div>
                    <div class="grid-text">Text</div>
                </a>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="grid-icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="grid-text">Text</div>
                </a>
            </div>
        </div>
    </div>

@endsection
