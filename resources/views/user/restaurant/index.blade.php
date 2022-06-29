@extends('layouts.dashboard')

@section('content')
    <div class="container">

        <h1 class="mb-4">Benvenuto {{ $user->name }}</h1>
        @if (sizeof($restaurant) > $id - 1)
            <div class="d-flex justify-content-between">
                <h2>{{ $restaurant[$id - 1]->name }}</h2>
                <div class="d-flex align-items-center">

                    <a href="{{ route('user.restaurant.edit', $restaurant[$id - 1]->id) }}"
                        class="btn btn-outline-info text-decoration-none mr-2">modifica</a>

                </div>
            </div>

            <div class="bo-restaurant-cover mb-2">
                <!--img src="{{-- $restaurant[$id - 1]->cover --}}" alt="cover"-->
                 <img src="{{ asset('/storage/' . $restaurant[$id - 1]->cover) }}" alt="cover">
            </div>
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
            {{-- <img src="{{ asset('/storage/' . $restaurant[$id - 1]->logo) }}" alt="logo" class="w-25"> --}}
        @else
            <h2>Non hai ancora aggiunto un ristorante rimedia subito!</h2>


            <a href="{{ route('user.restaurant.create') }}"
                class="btn btn-outline-secondary text-decoration-none">crea</a>
        @endif

    </div>
@endsection
