@extends('layout.base')

@section('pageTitle', 'Add_Comic')

@section('content')

    <div class="container">

        <h1>Aggiungi Fumetto</h1>

        <form method="POST" action="{{route('comics.store')}}">

            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label" >Indirizzo immagine</label>
                <input required type="text" class="form-control" id="thumb" name="thumb" value="https://www.miosito.it">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label" >Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="Pippo">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie</label>
                <input type="number" class="form-control" id="series" name="series" value="11">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="500">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="2020-03-04">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label" >Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="500">
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis cum iste perferendis. Harum architecto, quod velit autem fugiat id inventore amet alias sed ipsum consequuntur iste tempora quia, facere placeat!</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </div>




@endsection
