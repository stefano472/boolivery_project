@extends('layouts.dashboard')

@section('content')
    <div class="bo-container">
        <div class="">
            <div class="col-12 ">
                <div class="allPosts d-flex justify-content-between align-items-center mb-4">
                    <h1 class="welcome-msg">I piatti del menù</h1>
                    <a href="{{ route('user.dishes.create') }}" class="bo-btn">
                        Aggiungi un piatto
                    </a>
                </div>

                <div class="order-details-container">
                    @if (sizeof($dishes) > 0)

                    <div class="details-order-container">
                        <h2><strong>tutti i piatti del tuo menù</strong></h2>


                        {{-- Creo una tabella --}}
                        <table class="table bo-table">
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
                                        <td class="td-svg">
                                            @if ($dish->available === 1)
                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" width="30px" height="30px"><path fill="#bae0bd" d="M20,38.5C9.8,38.5,1.5,30.2,1.5,20S9.8,1.5,20,1.5S38.5,9.8,38.5,20S30.2,38.5,20,38.5z"/><path fill="#5e9c76" d="M20,2c9.9,0,18,8.1,18,18s-8.1,18-18,18S2,29.9,2,20S10.1,2,20,2 M20,1C9.5,1,1,9.5,1,20s8.5,19,19,19   s19-8.5,19-19S30.5,1,20,1L20,1z"/><path fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3" d="M11.2,20.1l5.8,5.8l13.2-13.2"/></svg>
                                            @else

                                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" width="30px" height="30px"><path fill="#f78f8f" d="M21 24.15L8.857 36.293 4.707 32.143 16.85 20 4.707 7.857 8.857 3.707 21 15.85 33.143 3.707 37.293 7.857 25.15 20 37.293 32.143 33.143 36.293z"/><path fill="#c74343" d="M33.143,4.414l3.443,3.443L25.15,19.293L24.443,20l0.707,0.707l11.436,11.436l-3.443,3.443 L21.707,24.15L21,23.443l-0.707,0.707L8.857,35.586l-3.443-3.443L16.85,20.707L17.557,20l-0.707-0.707L5.414,7.857l3.443-3.443 L20.293,15.85L21,16.557l0.707-0.707L33.143,4.414 M33.143,3L21,15.143L8.857,3L4,7.857L16.143,20L4,32.143L8.857,37L21,24.857 L33.143,37L38,32.143L25.857,20L38,7.857L33.143,3L33.143,3z"/></svg>
                                            @endif
                                        </td>
                                        <td>&euro; {{ number_format($dish->price, 2, '.', "") }}</td>
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
        </div>
    </div>
    {{-- <script src="{{ asset('js/modal_dishes.js') }}"></script> --}}
@endsection

