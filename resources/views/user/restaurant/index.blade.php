@extends('layouts.dashboard')

@section('content')
    <div class="container">

        <h1>Il mio ristorante</h1>
        @if (sizeof($restaurant) > $id - 1)
            <h2>{{ $restaurant[$id - 1]->name }}</h2>
            <p>Indirizzo: {{ $restaurant[$id - 1]->address }}</p>
            <p>Motto: {{ $restaurant[$id - 1]->motto }}</p>
            <p>Partita IVA: {{ $restaurant[$id - 1]->tax_id }}</p>
            <p>Numero telefonico: {{ $restaurant[$id - 1]->phone_number }}</p>
            <p>Categorie:
                @foreach ($restaurant[$id - 1]->categories as $category)
                    {{ $category->name }}
                @endforeach
            </p>
            <p>Descrizione: {{ $restaurant[$id - 1]->description }}</p>
            <img src="{{ asset('/storage/' . $restaurant[$id - 1]->logo) }}" alt="">

            <button>
                <a href="{{ route('user.restaurant.edit', $restaurant[$id - 1]->id) }}">modifica</a>
            </button>
            <form action="{{ route('user.restaurant.destroy', $restaurant[$id - 1]->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">elimina</button>
            </form>
        @else
            <p>non hai ancora aggiunto un ristorante</p>

            <button>
                <a href="{{ route('user.restaurant.create') }}">crea</a>
            </button>
        @endif

    </div>
@endsection
