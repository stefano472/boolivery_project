<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email ricevuto ordine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700&family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Epilogue', sans-serif;">
    <h1>Riepilogo ordine con id {{$order->id}}</h1>
    {{-- <p><strong>Effettuato al ristorante {{$order->restaurant->name}}</strong></p> --}}
    
    <div class="">
        <p>Eseguito in data: <strong>{{ $order->created_at}}</strong></p>
        <p>Nome cliente: <strong>{{$order->customer_name}}</strong></p>
        <p>Cognome cliente: <strong>{{$order->customer_surname }}</strong></p>
        <p>Indirizzo di consegna:  <strong>{{ $order->customer_address }}</strong></p>
        <p>Numero di telefono cliente:  <strong>{{ $order->customer_phone }}</strong></p>
        <p>Totale pagato:  <strong>&euro;{{ $order->total }}</strong></p>
        <p>
            @if ($order->special_request)
                Richieste speciali: {{$order->special_request}}
            @else
                ---
            @endif
        </p>
            <div>
                <p>Piatti dell'ordine:</p>
                {{-- {{$order->pivot}} --}}
                <ul>
                    @foreach ($order->dishes as $dish)
                    
                        <li style="
                        display: flex;
                        gap: 30px;">
                            <span><strong>{{$dish->name}} </strong></span>
                            <span><strong>x{{$dish->pivot->quantity}} </strong></span>
                            <span><strong>&euro;{{number_format(($dish->price * $dish->pivot->quantity), 2, '.', "")}}</strong></span>
                        </li>

                    @endforeach
                </ul>
                
            </div>
    </div>
</body>
</html>