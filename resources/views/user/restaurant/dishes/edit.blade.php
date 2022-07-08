@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')
<div class="bo-container">
    <h1 class="mb-4">Modifica il piatto</h1>
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
        <div class="input-box mb-4">

            <label for="name">Nome del piatto *</label>
            <br>
            <input type="text" name="name" placeholder="nome" value="{{ old('name', $dish->name) }}"
                class="form-control @error('name') is-invalid @enderror" required>

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
        <div class="input-box mb-4">

            <label for="price">Prezzo *</label>
            <br>
            <input type="number" min="0" step=".01" name="price" placeholder="prezzo" value="{{ old('price', $dish->price) }}"
                class="form-control @error('name') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('price')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">

            <label for="available">Disponibile</label>
            <br>
            <input type="radio" name="available" value="1" {{ $dish->available == 1 ? 'checked' : '' }}>
            <span class="mr-4">
                Si
            </span>
            <input type="radio" name="available" value="0" {{ $dish->available == 0 ? 'checked' : '' }}>
            <span>
                No
            </span>

            <!-- errore relativo all'input -->
            @error('available')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box">
            <label for="cover">Immagine del piatto</label>
            <br>
            <input type="file" name="cover" class="mb-2">
            @if ($dish->cover)

                <div class="mb-4">

                        <p>Immagine corrente</p>

                    <div>

                        {{-- <img src="{{$dish->cover}}" class="w-25"> --}}
                        <img src="{{ asset('storage/' . $dish->cover)}}" class="w-25">

                    </div>

                </div>

            @else

                    <div class="mb-4">

                        <p>Nessuna immagine inserita</p>

                    </div>

            @endif

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
    </form>


</div>



@endsection

