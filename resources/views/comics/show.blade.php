@extends('layout.base')

@section('pageTitle', '{{$comic->title}}')


@section('content')

    <div class="container">
        <h1>{{$comic->title}}</h1>
        <div><strong>Immagine:</strong> {{$comic->thumb}}</div>
        <div><strong>Serie:</strong> {{$comic->series}}</div>
        <div><strong>Tipologia:</strong> {{$comic->type}}</div>
        <div><strong>Data di rilascio:</strong> {{$comic->sale_date}}</div>
        <div><strong>Prezzo:</strong> {{$comic->price}}</div>
        <div><strong>Descrizione:</strong> {!! $comic->description !!}</div>

        <a class="btn btn-primary mt-5" href="{{route('comics.index')}}" role="button">Torna alla lista</a>

    </div>

@endsection
