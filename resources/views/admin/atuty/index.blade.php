@extends('admin.layout.admin-layout')

@section('content')
    <div class="general-title">
        <h2>Nasze atuty</h2>
    </div>
    <div class="general-subtitle">
        <h4>
            Tutaj możesz zarządzać treścią, która znajduje się w sekcji "Nasze atuty"
            na stronie głównej naweksel.strondlafirm.hekko24.pl.
        </h4>
    </div>
    <div class="general-wrapper">
        <div class="add-section">
            <a href="{{ route('nasze-atuty.create') }}">
                <button>Dodaj wpis</button>
            </a>
        </div>
        <div class="list-of-sections">
            <h4>Lista dodanych treści do sekcji Nasze atuty</h4>
            @forelse ($entries as $key=>$entry)
                <div class="entries">
                    <div class="entry-card">
                        <div class="entry_id">Id: {{ $key + 1 }}</div>
                        <div class="entry_icon">Ikona: {{ $entry->icon }}</div>
                        <div class="entry_name">Nazwa: {{ $entry->name }}</div>
                        <div class="entry_content">Treść: {{ $entry->description }}</div>
                        <div class="options">
                            <div class="edit">
                                <a href="{{ route('nasze-atuty.edit', [$entry->id]) }}">
                                    <button>Edytuj</button>
                                </a>
                            </div>
                            <div class="delete">
                                <form action="{{ route('nasze-atuty.destroy', [$entry->id]) }}" method="post">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button type="submit">Usuń</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="empty">Nie ma żadnych wpisów.</div>
            @endforelse
        </div>
    </div>
@endsection
