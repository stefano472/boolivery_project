@extends('layouts.dashboard')

@section('content')
<div class="container">

    <h1>Il mio ristorante</h1>
    
    <button>
        <a href="{{ route('user.restaurant.create') }}">crea</a>
    </button>
</div>
@endsection
