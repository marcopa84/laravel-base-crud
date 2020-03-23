@extends('layouts.layout')


@section('content')
    <div class="col-6">
        <form action="{{route('cellulars.store')}}" method="post">
        @method('POST')
        @csrf
        <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" name="marca" placeholder="Inserisci la marca">
        </div>
        <div class="form-group">
        <label for="modello">Modello:</label>
        <input type="text" class="form-control" name="modello" placeholder="Inserisci il modello">
        </div>
        <div class="form-group">
        <label for="peso">peso:</label>
        <input type="number" min="1" max="300" class="form-control" name="peso" placeholder="Inserisci il peso">
        </div>
        <div class="form-group">
        <label for="prezzo">prezzo:</label>
        <input type="number"  min="1" max="2999" class="form-control" name="prezzo" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
        <label for="imgurl">Indirizzo dell'immagine:</label>
        <input type="text" class="form-control" name="imgurl" placeholder="Inserisci il link all'immagine">
        </div>
        <button type="submit" class="btn btn-danger ">Salva</button>
        </form>
    </div>   
@endsection