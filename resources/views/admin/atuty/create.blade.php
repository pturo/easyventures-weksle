@extends('admin.layout.admin-layout')

@section('content')
    <div class="create-section-title">
        <h2>Stwórz wpis do Nasze atuty</h2>
    </div>
    @if (Session::has('message'))
        <div class="success-feedback" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="form-wrapper">
        <form action="{{ route('nasze-atuty.store') }}" method="post">
            @csrf
            <div class="formControl">
                <label for="icon">Ikona</label>
                <input type="text" name="icon" placeholder="Wprowadź nazwę (format: fa fa-book)"
                    value="{{ old('icon') }}">
            </div>
            @error('icon')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <label for="name">Tytuł</label>
                <input type="text" name="name" placeholder="Wprowadź nazwę"
                    value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <label for="description">Opis</label>
                <textarea name="description" rows="5"
                placeholder="Wprowadź tekst">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <button type="submit">Zapisz</button>
            </div>
        </form>
        <a href="/admin/nasze-atuty">
            <button>Wróć</button>
        </a>
    </div>
@endsection
