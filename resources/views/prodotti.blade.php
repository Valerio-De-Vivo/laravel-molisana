@extends('layouts.app')

@section('title')
    La Molisana
@endsection

@section('content')
    <div class="shop">
        @foreach ($formati as $k => $prod)
            <h2 class="categoria"> {{$k}} </h2>

            @foreach ($prod as $key => $item)

                <div class="prod-card">
                    <img src=" {{$item['src']}} " alt="">
                    <div class="overlay">
                        <a href=" {{ route('dettagli-prodotto', ['id' => $key ]) }} "><h2> {{$item['titolo']}} {{$item['tipo']}} </h2></a>
                    </div>
                </div>
            @endforeach
            
        @endforeach
    </div>
@endsection


