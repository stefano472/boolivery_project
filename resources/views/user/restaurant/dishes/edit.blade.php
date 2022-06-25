@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')
    <h1>Modifica il piatto</h1>
    <!-- visione degli errori -->
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="error">Attenzione! {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="input-box">

            <label for="name">Nome del piatto</label>
            <br>
            <input type="text" name="name" placeholder="nome" value="{{ old('name', $dish->name) }}"
                class="form-control @error('name') is-invalid @enderror">

            <!-- errore relativo all'input -->
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="description">Descrizione</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="descrizione">{{ old('description', $dish->description) }}</textarea>

            <!-- errore relativo all'input -->
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price" placeholder="prezzo" value="{{ old('price', $dish->price) }}"
                class="form-control @error('name') is-invalid @enderror">

            <!-- errore relativo all'input -->
            @error('price')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="available">Disponibile</label>
            <br>
            <input type="radio" name="available" value="1" {{ $dish->available == 1 ? 'checked' : '' }}>Si
            <input type="radio" name="available" value="0" {{ $dish->available == 0 ? 'checked' : '' }}>No

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

        <a href="{{ route('user.restaurant.index') }}">Annulla</a>

    </div>
@endsection
