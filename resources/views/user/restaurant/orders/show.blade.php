@extends('layouts.dashboard')

@section('content')
<div class="bo-container">

    <div class="row m-0 justify-content-center">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="order-h1">Ordine numero {{ $order->id }}</h1>
                <a href="{{ route('user.orders.index') }}" class="bo-btn">Indietro</a>
            </div>

            <div class="order-details-container">
                <p><span>Nome cliente: </span><strong>{{$order->customer_name}}</strong></p>
                <p><span>Cognome cliente: </span><strong>{{$order->customer_surname }}</strong></p>
                <p><span>Indirizzo di consegna:  </span><strong>{{ $order->customer_address }}</strong></p>
                <p><span>Numero di telefono:  </span><strong>{{ $order->customer_phone }}</strong></p>
                <p><span>Totale:  </span><strong>&euro;{{ $order->total }}</strong></p>
                <p><span>
                    @if ($order->special_request)
                        Richieste speciali: {{$order->special_request}}
                    @else
                        ---
                    @endif
                </p>
                    <div>

                        {{-- {{$order->pivot}} --}}
                        <div class="details-order-container">
                            <h2><strong>Dettagli dell'ordine</strong></h2>
                            <table class="table bo-table">
                                <thead>
                                    {{-- Table title --}}
                                    <tr>
                                        <th>Nome</th>
                                        <th>Quantità</th>
                                        <th>prezzo</th>
                                    </tr>
                                    {{-- / Table title --}}
                                </thead>
                                <tbody>
                                    {{-- Table content --}}
                                    @foreach ($order->dishes as $dish)
                                        <tr class="bo-tr">
                                            <td>{{ $dish->name }}</td>
                                            <td>{{$dish->pivot->quantity}}</td>
                                            <td>&euro;{{number_format(($dish->price * $dish->pivot->quantity), 2, '.', "")}}</td>
                                        </tr>
                                    @endforeach
                                    {{-- / Table content --}}
                                </tbody>
                            </table>
                        </div>

                    </div>

            </div>


        </div>
    </div>
</div>

@endsection

