@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')

<div class="bo-container">
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

        <div class="input-box mb-2 mt-5">

            <label for="name">Nome del piatto *</label>
            <br>
            <input type="text" name="name" placeholder="nome"
                value="{{ old('name')}}"
                class="form-control @error('name') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="description">Descrizione *</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" required
                placeholder="descrizione">{{old('description')}}</textarea>

            <!-- errore relativo all'input -->
            @error('description')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="price">Prezzo *</label>
            <br>
            <input type="number" min="0" step=".01" name="price" placeholder="prezzo"
                value="{{ old('price')}}"
                class="form-control @error('price') is-invalid @enderror" required onkeydown=" return inputNumbersNulls(event)">

            <!-- errore relativo all'input -->
            @error('price')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="available">Disponibile</label>
            <br>
            <input type="radio" name="available" value="1" checked>
            <span class="mr-2">
                Si
            </span>
            <input type="radio" name="available" value="0">
            <span>
                No
            </span>

            <!-- errore relativo all'input -->
            @error('available')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="cover">Immagine del piatto</label>
            <br>
            <input type="file" name="cover">

            <!-- errore relativo all'input -->
            @error('cover')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>

        <!-- ...content... -->

        <div class="d-flex justify-content-end">
            <input type="submit" value="Salva" class="btn btn-outline-info text-decoration-none mr-2">
            <a href="{{ route('user.dishes.index') }}" class="btn btn-outline-danger text-decoration-none">Annulla</a>
        </div>

    </div>
    </form>
@endsection
