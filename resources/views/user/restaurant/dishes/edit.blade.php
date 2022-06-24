@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')
    <h1>Modifica i Dati</h1>
    <!-- visione degli errori -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="error">Attenzione! {{$error}}</p>
        @endforeach
    @endif

    <form action="{{ route('user.restaurant.update', $restaurant->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="input-box">

            <label for="name">Nome del ristorante</label>
            <br>
            <input type="text" name="name" placeholder="nome" value="{{ old('name', $restaurant->name) }}">

            <!-- errore relativo all'input -->
            @error('name')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="address">Indirizzo</label>
            <br>
            <input type="text" name="address" placeholder="indirizzo" value="{{ old('address', $restaurant->address) }}">

            <!-- errore relativo all'input -->
            @error('address')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="motto">Motto</label>
            <br>
            <textarea name="motto" id="" cols="30" rows="5" placeholder="motto">{{old('motto',$restaurant->motto)}}</textarea>

            <!-- errore relativo all'input -->
            @error('motto')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="tax_id">Partita IVA</label>
            <br>
            <input type="text" name="tax_id" placeholder="partita iva" value="{{ old('tax_id', $restaurant->tax_id) }}">

            <!-- errore relativo all'input -->
            @error('tax_id')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="phone_number">Numero di telefono</label>
            <br>
            <input type="tel" name="phone_number" placeholder="..." value="{{ old('phone_number', $restaurant->phone_number) }}">

            <!-- errore relativo all'input -->
            @error('phone_number')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="cover">Copertina ristorante</label>
            <br>
            <input type="file" name="cover">

            <!-- errore relativo all'input -->
            @error('cover')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="logo">Logo ristorante</label>
            <br>
            <input type="file" name="logo">

            <!-- errore relativo all'input -->
            @error('logo')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>
        <div class="input-box">

            <label for="description">Descrizione</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="...">{{ old('description', $restaurant->description) }}"</textarea>

            <!-- errore relativo all'input -->
            @error('description')

                    <p class="error">{{$message}}</p>

            @enderror

        </div>

        <!-- ...content... -->

        <input type="submit" value="Invia">
    </form>

    <div class="buttons">

        <a href="{{ route('user.restaurant.index')}}">Annulla</a>

    </div>
@endsection