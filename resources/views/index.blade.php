@extends('layout.layout')

@section('pageTitle', 'Home')

@section('content')

<div class="container">

    <h1>Lista dei formati</h1>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Data di rilascio</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Descrizione</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->description}}</td>

                    {{-- <td>
                        <a class="btn btn-primary" href="{{ route('', $pasta->id) }}" role="button">Vedi</a>
                    </td> --}}

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
