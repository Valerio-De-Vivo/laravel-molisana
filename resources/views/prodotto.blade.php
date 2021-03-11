@extends('layouts.app')

@section('link')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection

@section('title')
    La Molisana
@endsection

@section('content')
    <div class="prodotto">
        <img src=" {{$prodotto['src-h']}} " alt="">
        <img src=" {{$prodotto['src']}} " alt="">
        <img src=" {{$prodotto['src-p']}} " alt="">

        <h2> {{$prodotto['titolo']}} </h2>
        <div class="info">
            <p> <i class="fas fa-info"></i> {{$prodotto['tipo']}} </p>
            <p> <i class="fas fa-clock"></i> {{$prodotto['cottura']}} </p>
            <p> <i class="fas fa-balance-scale-right"></i> {{$prodotto['peso']}} </p>
        </div>
        <p> {!!$prodotto['descrizione']!!} </p>
    </div> 
@endsection