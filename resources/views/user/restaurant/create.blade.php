<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon">
    {{-- <link rel="shortcut icon" href="https://boolean.careers/favicon/favicon.ico" type="image/x-icon"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backoffice.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Boolivery</a>
        {{-- <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000">
                    Visita il sito
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li> --}}
        {{-- </ul> --}}
    </nav>
    <div class="container-fluid">
        <div class="row">
            

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4">
                <h1>Inserisci i Dati</h1>
    <!-- visione degli errori -->
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="error">Attenzione! {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.restaurant.store') }}" 
        onsubmit="return valthisform()" method="POST" 
        enctype="multipart/form-data">
        @csrf

        <div class="input-box mb-2">

            <label for="name">Nome del ristorante *</label>
            <br>
            <input type="text" name="name" placeholder="nome" 
                value="{{ old('name')}}"
                class="form-control @error('name') is-invalid @enderror"
                required>

            <!-- errore relativo all'input -->
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="address">Indirizzo *</label>
            <br>
            <input type="text" name="address" placeholder="indirizzo"
                value="{{ old('address')}}"
                class="form-control @error('address') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('address')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="motto">Motto *</label>
            <br>
            <textarea name="motto" id="" cols="30" rows="5" placeholder="motto"
                class="form-control @error('motto') is-invalid @enderror"
                required>{{ old('motto')}}</textarea>

            <!-- errore relativo all'input -->
            @error('motto')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="tax_id">Partita IVA *</label>
            <br>
            <input type="number" name="tax_id" placeholder="partita iva"
                value="{{ old('tax_id')}}"
                class="form-control @error('tax_id') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('tax_id')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="phone_number">Numero di telefono *</label>
            <br>
            <input type="number" name="phone_number" placeholder="..."
                value="{{ old('phone_number')}}"
                class="form-control @error('phone_number') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('phone_number')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <div>Categoria *</div>
            <br>
            <div class="container">
                <div class="row">    
                    @foreach ($categories as $category)
                    <div class="col-4">
                        <input type="checkbox" name="categories[]" id="" value="{{ $category->id }}"
                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                        class="categoryInput form-check-input @error('categories')  @enderror"> 
                        <label for="category">{{ $category->name }}</label>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="alert" class="alert alert-danger" style="display:none">
                Aggiungi almeno una categoria
            </div>


            <!-- errore relativo all'input -->
            @error('category')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="cover">Copertina ristorante</label>
            <br>
            <input type="file" name="cover">

            <!-- errore relativo all'input -->
            @error('cover')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="logo">Logo ristorante</label>
            <br>
            <input type="file" name="logo">

            <!-- errore relativo all'input -->
            @error('logo')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="description">Descrizione *</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="..."
                class="form-control @error('description') is-invalid @enderror"
                required>{{ old('description')}}</textarea>

            <!-- errore relativo all'input -->
            @error('description')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <!-- ...content... -->

        <div class="d-flex justify-content-end">
            <input id="createDish" type="submit" value="Salva" class="btn btn-outline-info text-decoration-none mr-2">
            <a href="{{ route('user.restaurant.index') }}" class="btn btn-outline-danger text-decoration-none">Annulla</a>
        </div>
    </form>
            </main>
        </div>
    </div>
</body>

</html>

{{-- @section('content')
    <h1>Inserisci i Dati</h1>
    <!-- visione degli errori -->
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="error">Attenzione! {{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.restaurant.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-box mb-2">

            <label for="name">Nome del ristorante *</label>
            <br>
            <input type="text" name="name" placeholder="nome" 
                value="{{ old('name')}}"
                class="form-control @error('name') is-invalid @enderror"
                required>

            <!-- errore relativo all'input -->
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="address">Indirizzo *</label>
            <br>
            <input type="text" name="address" placeholder="indirizzo"
                value="{{ old('address')}}"
                class="form-control @error('address') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('address')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="motto">Motto *</label>
            <br>
            <textarea name="motto" id="" cols="30" rows="5" placeholder="motto"
                class="form-control @error('motto') is-invalid @enderror"
                required>{{ old('motto')}}</textarea>

            <!-- errore relativo all'input -->
            @error('motto')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="tax_id">Partita IVA *</label>
            <br>
            <input type="text" name="tax_id" placeholder="partita iva"
                value="{{ old('tax_id')}}"
                class="form-control @error('tax_id') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('tax_id')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="phone_number">Numero di telefono *</label>
            <br>
            <input type="tel" name="phone_number" placeholder="..."
                value="{{ old('phone_number')}}"
                class="form-control @error('phone_number') is-invalid @enderror" required>

            <!-- errore relativo all'input -->
            @error('phone_number')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <div>Categoria *</div>
            <br>
            <div class="container">
                <div class="row">    
                    @foreach ($categories as $category)
                    <div class="col-4">
                        <input type="checkbox" name="categories[]" id="" value="{{ $category->id }}"
                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                        class="form-check-input @error('categories')  @enderror"> 
                        <label for="category">{{ $category->name }}</label>
                        <br>
                    </div>
                    @endforeach
                </div>
            </div>


            <!-- errore relativo all'input -->
            @error('category')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="cover">Copertina ristorante</label>
            <br>
            <input type="file" name="cover">

            <!-- errore relativo all'input -->
            @error('cover')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="logo">Logo ristorante</label>
            <br>
            <input type="file" name="logo">

            <!-- errore relativo all'input -->
            @error('logo')
                <p class="error">{{ $message }}</p>
            @enderror

        </div>
        <div class="input-box mb-2">

            <label for="description">Descrizione *</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="..."
                class="form-control @error('description') is-invalid @enderror"
                required>{{ old('description')}}</textarea>

            <!-- errore relativo all'input -->
            @error('description')
                <p class="invalid-feedback">{{ $message }}</p>
            @enderror

        </div>

        <!-- ...content... -->

        <div class="d-flex justify-content-end">
            <input type="submit" value="Salva" class="btn btn-outline-info text-decoration-none mr-2">
            <a href="{{ route('user.restaurant.index') }}" class="btn btn-outline-danger text-decoration-none">Annulla</a>
        </div>
    </form>
@endsection --}}


