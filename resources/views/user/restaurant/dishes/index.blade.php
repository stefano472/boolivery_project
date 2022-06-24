@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-12 ">
            <div class="allPosts d-flex justify-content-between align-items-center">
                <h1>I piatti del menù</h1>
                <a href="{{route('user.dishes.create')}}" class="btn btn-info"> 
                    Aggiungi un piatto
                </a>
            </div>

            {{-- Creo una tabella --}}
            <table class="table">
                <thead>
                    {{-- Table title  --}}
                    <tr>
                        <th>img</th>
                        <th>nome</th>
                        <th>descrizione</th>
                        <th>disponibilità</th>
                        <th>prezzo</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    {{--/ Table title  --}}
                </thead>
                <tbody>
                    {{-- Table content  --}}
                    @foreach ($dishes as $dish)
                        <tr>
                            <td>{{ $dish->img }}</td>
                            <td>{{ $dish->name }}</td>
                            <td>{{ $dish->description }}</td>
                            <td>
                                @if ($dish->available===1)
                                    disponibile
                                @else
                                    non disponibile
                                @endif
                            </td>
                            <td>&euro; {{ $dish->price }}</td>
                            <td class="text-center">
                                {{-- <a href="{{ route('admin.posts.show' , $post->id) }}" 
                                    class="btn btn-outline-secondary text-decoration-none" 
                                    > 
                                    Show
                                </a> --}}
                                <a href="{{ route('user.dishes.edit' , $dish->id) }}" 
                                    class="btn btn-outline-info text-decoration-none" 
                                    > 
                                    Edit
                                </a>
                                <a href="{{ route('user.dishes.index', $dish->id) }}"
                                    class="text-decoration-none">
                                    <form action="{{route('user.dishes.destroy' ,  $dish->id)}}" method="POST" class="d-inline-block ">
                                        @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" 
                                                onclick="return confirm('Are you sure you wanna delete the Post?')"
                                            >
                                                Delete
                                            </button>
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    {{--/ Table content  --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
