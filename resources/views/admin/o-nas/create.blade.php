@extends('admin.layout.admin-layout')

@section('content')
    <div class="create-section-title">
        <h2>Stwórz sekcję</h2>
    </div>
    @if (Session::has('message'))
        <div style="success-feedback" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="form-wrapper">
        <form action="{{ route('o-nas.store') }}" method="post">
            @csrf
            <div class="formControl">
                <label for="name">Nazwa sekcji</label>
                <input type="text" name="name" placeholder="Wprowadź nazwę"
                    value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <label for="content">Dodaj tekst</label>
                <textarea name="content" name="content" rows="5"
                placeholder="Wprowadź tekst">{{ old('content') }}</textarea>
            </div>
            @error('content')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <button type="submit">Zapisz</button>
                <a href="{{ route('o-nas.index') }}">
                    <button>Wróć</button>
                </a>
            </div>
        </form>
    </div>
@endsection
