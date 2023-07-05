@extends('admin.layout.admin-layout')

@section('content')
    <div class="create-section-title">
        <h2>Edytuj wpis Współpraca</h2>
    </div>
    @if (Session::has('message'))
        <div class="success-feedback" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="form-wrapper">
        <form action="{{ route('wspolpraca.update', [$entry->id]) }}" method="post">
            {{ method_field('PUT') }}
            @csrf
            <div class="formControl">
                <label for="content">Treść</label>
                <textarea name="content" rows="5"
                placeholder="Wprowadź tekst">{{ $entry->content }}</textarea>
            </div>
            @error('content')
                <div class="invalid-feedback" role="alert">{{ $message }}</div>
            @enderror
            <div class="formControl">
                <button type="submit">Zapisz</button>
            </div>
        </form>
        <a href="/admin/wspolpraca">
            <button>Wróć</button>
        </a>
    </div>
@endsection
