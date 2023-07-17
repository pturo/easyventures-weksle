@extends('admin.layout.admin-layout')

@section('content')
    <div class="create-section-title">
        <h2>Edytuj wpis do Nasze atuty</h2>
    </div>
    @if (Session::has('message'))
        <div class="success-feedback" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="form-wrapper">
        <form action="{{ route('nasze-atuty.update', [$entry->id]) }}" method="post">
            {{ method_field('PUT') }}
            @csrf
            <div class="formControl">
                <label for="icon">Ikona</label>
                <input type="text" name="icon" placeholder="Wprowadź nazwę (format: fa fa-book)"
                    value="{{ $entry->icon }}">
            </div>
            @error('icon')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <label for="name">Tytuł</label>
                <input type="text" name="name" placeholder="Wprowadź nazwę"
                    value="{{ $entry->name }}">
            </div>
            @error('name')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <label for="description">Opis</label>
                <textarea name="description" rows="5"
                placeholder="Wprowadź tekst">{{ $entry->description }}</textarea>
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
