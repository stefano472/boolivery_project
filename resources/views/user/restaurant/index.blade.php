@extends('layouts.dashboard')

@section('content')
    <div class="bo-container">

        <h1 class="welcome-msg">Benvenuto {{ $user->name }}</h1>

        <div>
            @if ($restaurant)
            <div class="info-restaurant-container">
                <div class="bo-restaurant-index">
                    <h2>{{ $restaurant->name }}</h2>
                    <div class="d-flex align-items-center">

                        <a href="{{ route('user.restaurant.edit', $restaurant->id) }}"
                            class="bo-btn">modifica</a>

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
                <div class="bo-restaurant-info">
                    <p><span>Indirizzo: </span>{{ $restaurant->address }}</p>
                    <p><span>Motto: </span>{{ $restaurant->motto }}</p>
                    <p><span>Partita IVA: </span>{{ $restaurant->tax_id }}</p>
                    <p><span>Numero telefonico: </span>{{ $restaurant->phone_number }}</p>
                    <p><span>Categorie: </span>
                        @foreach ($restaurant->categories as $category)
                            {{ $category->name }}
                        @endforeach
                    </p>
                    <p><span>Descrizione: </span>{{ $restaurant->description }}</p>
                </div>


                {{-- <img src="{{ asset('/storage/' . $restaurant[$id - 1]->logo) }}" alt="logo" class="w-25"> --}}
                @else
                    <h2 class="mt-5">Non hai ancora aggiunto un ristorante rimedia subito!</h2>
                    <p>Non puoi avere accesso alla dashboard fino a quando non lo crei</p>


                    <a href="{{ route('user.restaurant.create') }}"
                        class="btn btn-outline-secondary text-decoration-none">crea</a>
                @endif

            </div>
        </div>
    </div>
@endsection



