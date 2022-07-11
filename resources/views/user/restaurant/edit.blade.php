@extends('layouts.dashboard')

<!-- Form di creazione -->
@section('content')

    <div class="bo-container">
        <h1>Modifica i Dati</h1>
        <div class="form-container">

            <!-- visione degli errori -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="error">Attenzione! {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('user.restaurant.update', $restaurant->id) }}"
                onsubmit="return valthisform()" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')
                <div class="input-box mb-4">

                    <label for="name">Nome del ristorante *</label>
                    <br>
                    <input type="text" name="name" placeholder="Nome..." value="{{ old('name', $restaurant->name) }}"
                        class="form-control @error('name') is-invalid @enderror" required>

                    <!-- errore relativo all'input -->
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>
                <div class="input-box mb-4">

                    <label for="address">Indirizzo *</label>
                    <br>
                    <input type="text" name="address" placeholder="Indirizzo..."
                        value="{{ old('address', $restaurant->address) }}"
                        class="form-control @error('address') is-invalid @enderror" required>

                    <!-- errore relativo all'input -->
                    @error('address')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-box mb-4">

                    <label for="tax_id">Partita IVA *</label>
                    <br>
                    <input type="number" name="tax_id" placeholder="Partita iva..."
                        value="{{ old('tax_id', $restaurant->tax_id) }}"
                        class="form-control @error('tax_id') is-invalid @enderror"  onkeydown="return inputNumbersNull(event)" required>

                    <!-- errore relativo all'input -->
                    @error('tax_id')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>
                <div class="input-box mb-4">

                    <label for="phone_number">Numero di telefono *</label>
                    <br>
                    <input type="number" name="phone_number" placeholder="+39...."
                        value="{{ old('phone_number', $restaurant->phone_number) }}"
                        class="form-control @error('phone_number') is-invalid @enderror" required onkeydown="return inputNumbersNull(event)">

                    <!-- errore relativo all'input -->
                    @error('phone_number')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>

                <div class="input-box mb-4">

                    <label for="motto">Motto *</label>
                    <br>
                    <textarea name="motto" id="" cols="30" rows="5" placeholder="Motto..."
                        class="form-control @error('motto') is-invalid @enderror"
                        required>{{ old('motto', $restaurant->motto) }}</textarea>

                    <!-- errore relativo all'input -->
                    @error('motto')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>

                {{-- DESCRIZIONE --}}
                <div class="input-box mb-4">

                    <label for="description">Descrizione *</label>
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" placeholder="..."
                        class="form-control @error('description') is-invalid @enderror"
                        required>{{ old('description', $restaurant->description) }}</textarea>

                    <!-- errore relativo all'input -->
                    @error('description')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                {{-- CATEGORIE --}}
                <div class="input-box mb-4">
                    <div>Categoria *</div>
                    <br>
                    <div class="container">
                        <div class="row">
                            @foreach ($categories as $category)
                            <div class="col-4">
                                <input type="checkbox" name="categories[]" id="" value="{{ $category->id }}"
                                {{ $restaurant->categories->contains($category->id) ? 'checked' : '' }}
                                class="categoryInput form-check-input @error('categories')  @enderror">
                                <label for="category">{{ $category->name }}</label>
                            </div>
                            @endforeach
                        </div>
                        <div id="alert" class="alert alert-danger" style="display:none">
                            Aggiungi almeno una categoria
                        </div>
                    </div>

                    <!-- errore relativo all'input -->
                    @error('category')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>


                {{-- IMG RISTORANTE --}}
                <div class="input-box mb-4">

                    <label for="cover">Copertina ristorante</label>
                    <br>
                    <input type="file" name="cover">

                    <!-- errore relativo all'input -->
                    @error('cover')
                        <p class="error">{{ $message }}</p>
                    @enderror

                    @if ($restaurant->cover)
                        <div class="img-rest mb-4">
                                Immagine corrente
                            <div>
                                {{-- <img src="{{$dish->cover}}" class="w-25"> --}}
                                <img src="{{ asset('storage/' . $restaurant->cover)}}">
                            </div>
                        </div>
                    @else
                            <div class="mb-5">
                                <p>Nessuna immagine inserita</p>
                            </div>
                    @endif
                </div>


                {{-- IMG LOGO --}}
                <div class="input-box mb-4">

                    <label for="logo">Logo ristorante</label>
                    <br>
                    <input type="file" name="logo">

                    <!-- errore relativo all'input -->
                    @error('logo')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>

                {{-- BUTTON FORM --}}
                <div class="d-flex justify-content-end">
                    <input id="updateDish" type="submit" name="submit" value="Salva" class="btn btn-outline-info text-decoration-none mr-2">
                    <a href="{{ route('user.restaurant.index') }}" class="btn btn-outline-danger text-decoration-none">Annulla</a>
                </div>


            </form>

        </div>

        <script src="{{ asset('js/backoffice.js') }}"></script>


    </div>
@endsection

