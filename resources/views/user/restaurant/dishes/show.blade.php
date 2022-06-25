@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Vedi il dettaglio del piatto {{ $dish->name }}</h1>
                    <a href="{{ route('user.dishes.index') }}" class="btn btn-info">Vai al menù completo</a>
                </div>
                {{-- Contenuti --}}
                <img src="{{ $dish->cover }}" alt="{{ $dish->name }}">
                <p>Descrizione:{{ $dish->description }}</p>
                <p>Prezzo: &euro;{{ $dish->price }}</p>
                <p>
                    @if ($dish->available === 1)
                        disponibile
                    @else
                        non disponibile
                    @endif
                </p>
                {{-- / Contenuti --}}

                <a href="{{ route('user.dishes.edit', $dish->id) }}" class="btn btn-outline-info">Edit</a>
                <form action="{{ route('user.dishes.destroy', $dish->id) }}" method="POST" class="d-inline-block ">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" onclick="return confirm('Are you sure you wanna delete the Post?');">
                        Delete
                    </button>
                </form>
                </dl>

            </div>
        </div>
    </div>
@endsection
