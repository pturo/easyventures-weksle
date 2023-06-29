@extends('admin.layout.admin-layout')

@section('content')
    <div class="o-nas-title">
        <h2>O nas</h2>
    </div>
    <div class="o-nas-subtitle">
        <h4>
            Tutaj możesz zarządzać treścią, która znajduje się w sekcji "O nas"
            na stronie głównej naweksel.strondlafirm.hekko24.pl.
        </h4>
    </div>
    <div class="o-nas-wrapper">
        <div class="add-section">
            <a href="{{ route('o-nas.create') }}">
                <button>Dodaj sekcję</button>
            </a>
        </div>
        <div class="list-of-sections">
            {{-- @forelse ( as )

            @empty

            @endforelse --}}
        </div>
    </div>
@endsection
