@extends('layouts.dashboard')

@section('content')
<div class="container">

    <h1>Il mio ristorante</h1>
    @if (sizeof($restaurant)>0)
        <p>{{$restaurant[0]->name}}</p>
    @else 
        <p>non hai ancora aggiunto un ristorante</p>
    @endif
    
    <button>
        <a href="{{ route('user.restaurant.create') }}">crea</a>
    </button>
</div>
@endsection
