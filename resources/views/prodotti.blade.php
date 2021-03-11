@extends('layouts.app')

@section('title')
    La Molisana
@endsection

@section('content')
    <div class="shop">
        @foreach ($formati as $k => $prod)
            <div class="prod-card">
                <img src=" {{$prod['src']}} " alt="">
                <div class="overlay">
                    <a href=" {{ route('dettagli-prodotto', ['id' => $k ]) }} "><h2> {{$prod['titolo']}} {{$prod['tipo']}} </h2></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection