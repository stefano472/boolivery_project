@extends('layouts.dashboard')

@section('content')
    <div class="container">

        <h1 class="mb-4">Benvenuto {{ $user->name }}</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Inizia subito ad inserire tutte le informazioni del tuo ristorante e dei tuoi piatti!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
