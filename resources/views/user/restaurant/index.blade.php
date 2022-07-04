@extends('layouts.dashboard')

@section('content')
    <div class="container">

        <h1 class="mb-4">Benvenuto {{ $user->name }}</h1>
        @if ($restaurant)
            <div class="d-flex justify-content-between">
                <h2>{{ $restaurant->name }}</h2>
                <div class="d-flex align-items-center">

                    <a href="{{ route('user.restaurant.edit', $restaurant->id) }}"
                        class="btn btn-outline-info text-decoration-none mr-2">modifica</a>

                </div>
            </div>

            <div class="bo-restaurant-cover mb-2">
                <!--img src="{{-- $restaurant[$id - 1]->cover --}}" alt="cover"-->
                 {{-- <img src="{{ asset('/storage/' . $restaurant->cover) }}" alt="cover"> --}}
                 @if ($restaurant->cover)

                        <img src="{{ asset('storage/' . $restaurant->cover) }}" alt="cover">

                    @else

                        <p class="alert-danger">Inserisci l'immagine del ristorante</p>

                    @endif
            </div>
            <p>Indirizzo: {{ $restaurant->address }}</p>
            <p>Motto: {{ $restaurant->motto }}</p>
            <p>Partita IVA: {{ $restaurant->tax_id }}</p>
            <p>Numero telefonico: {{ $restaurant->phone_number }}</p>
            <p>Categorie:
                @foreach ($restaurant->categories as $category)
                    {{ $category->name }}
                @endforeach
            </p>
            <p>Descrizione: {{ $restaurant->description }}</p>
            {{-- <img src="{{ asset('/storage/' . $restaurant[$id - 1]->logo) }}" alt="logo" class="w-25"> --}}
        @else
            <h2>Non hai ancora aggiunto un ristorante rimedia subito!</h2>
            <p>Non puoi avere accesso alla dashboard fino a quando non lo crei</p>


            <a href="{{ route('user.restaurant.create') }}"
                class="btn btn-outline-secondary text-decoration-none">crea</a>
        @endif

    </div>
@endsection
