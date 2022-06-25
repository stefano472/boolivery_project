@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')
    <h1>Inserisci i dati del piatto</h1>
    <!-- visione degli errori -->
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="error">Attenzione! {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.dishes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-box">

            <label for="name">Nome del piatto</label>
            <br>
            <input type="text" name="name" placeholder="nome" class="form-control @error('name') is-invalid @enderror">

            <!-- errore relativo all'input -->
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="description">Descrizione</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="descrizione"></textarea>

            <!-- errore relativo all'input -->
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price" placeholder="prezzo"
                class="form-control @error('price') is-invalid @enderror">

            <!-- errore relativo all'input -->
            @error('price')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="available">Disponibile</label>
            <br>
            <input type="radio" name="dish-availability" value="true" checked>Si
            <input type="radio" name="dish-availability" value="false">No

            <!-- errore relativo all'input -->
            @error('available')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="cover">Immagine del piatto</label>
            <br>
            <input type="file" name="cover" placeholder="...">

            <!-- errore relativo all'input -->
            @error('cover')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>

        <!-- ...content... -->

        <input type="submit" value="Invia">
    </form>

    <div class="buttons">

        <a href="{{ route('user.dishes.index') }}">Annulla</a>

    </div>
@endsection
