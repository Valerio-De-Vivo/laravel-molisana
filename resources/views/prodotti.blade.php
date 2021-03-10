@extends('layouts.app')

@section('title')
    La Molisana
@endsection

@section('content')
    <div class="shop">
        @foreach ($formati as $prod)
            <div class="prod-card">
                <img src=" {{$prod['src']}} " alt="">
                <div class="overlay">
                    <h2> {{$prod['titolo']}} </h2>
                </div>
            </div>
        @endforeach
    </div>
@endsection