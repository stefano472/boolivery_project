@extends('layouts.dashboard')

@section('content')
    <div class="bo-container">
        <div class="">
            <div class="col-12 ">
                <div class="allPosts d-flex justify-content-between align-items-center mb-4">
                    <h1>I piatti del menù</h1>
                    <a href="{{ route('user.dishes.create') }}" class="bo-btn">
                        Aggiungi un piatto
                    </a>
                </div>
                @if (sizeof($dishes) > 0)
                    {{-- Creo una tabella --}}
                    <table class="table">
                        <thead>
                            {{-- Table title --}}
                            <tr>
                                <th>nome</th>
                                <th>descrizione</th>
                                <th>disponibilità</th>
                                <th>prezzo</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            {{-- / Table title --}}
                        </thead>
                        <tbody>
                            {{-- Table content --}}
                            @foreach ($dishes as $dish)
                                <tr class="bo-tr {{$dish->available === 1 ? '' : 'back-red'}}">
                                    <td>{{ $dish->name }}</td>
                                    <td>{{ $dish->description }}</td>
                                    <td>
                                        @if ($dish->available === 1)
                                            disponibile
                                        @else
                                            non disponibile
                                        @endif
                                    </td>
                                    <td>&euro; {{ $dish->price }}</td>
                                    <td class="text-center bo-btn-action">
                                        <a href="{{ route('user.dishes.show', $dish->id) }}"
                                            class="btn btn-outline-secondary text-decoration-none">
                                            Show
                                        </a>
                                        <a href="{{ route('user.dishes.edit', $dish->id) }}"
                                            class="btn btn-outline-info text-decoration-none">
                                            Edit
                                        </a>
                                        {{-- <button class='open-modal btn btn-danger' type="button">Delete</button>

                                        <div class="modal-container">
                                          <div class="bo-modal">
                                            <h2>Sei sicuro???</h2>
                                            <p>Attenzione!!!! Una volta cancellato il piatto, sarà perso...</p>
                                            <form class="delete" action="{{ route('user.dishes.destroy', $dish->id) }}" method="POST">
                                              @csrf

                                              @method('DELETE')

                                              <button class="btn btn-danger" type="submit">Si</button>
                                              <button class='close-modal' class="btn btn-outline-info" type="button">No</button>
                                            </form>
                                          </div>
                                        </div> --}}
                                        {{-- <a href="{{ route('user.dishes.index', $dish->id) }}"
                                            class="text-decoration-none"> --}}
                                            {{-- <form action="{{ route('user.dishes.destroy', $dish->id) }}" method="POST"
                                                class="d-inline-block ">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you wanna delete the Post?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                            {{-- / Table content --}}
                        </tbody>
                    </table>
                @else
                    <p>Non hai ancora piatti nel tuo menù aggiungine uno!</p>
                @endif
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/modal_dishes.js') }}"></script> --}}
@endsection
